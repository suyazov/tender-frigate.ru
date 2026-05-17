<?php

namespace Wpshop\Quizle;

use WP_Error;

/**
 * @property int          $result_id
 * @property int          $quiz_id
 * @property int          $user_id
 * @property string       $user_cookie
 * @property string       $token
 * @property string|array $result_data
 * @property string       $name
 * @property string       $email
 * @property string       $phone
 * @property string       $additional_data
 * @property string       $created_at
 * @property string       $finished_at
 */
class QuizleResult {

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var string[]
     */
    protected $fields_to_json = [
        'result_data',
        'additional_data',
        'context',
    ];

    /**
     * @var array
     */
    protected $_hint_penalties;

    /**
     * @return string
     */
    public function get_mac() {
        if ( ! $this->result_id ) {
            return null;
        }

        return md5( implode( ':', [
            NONCE_KEY,
            $this->result_id,
            $this->quiz_id,
            $this->user_cookie,
        ] ) );
    }

    /**
     * @param string $key
     * @param mixed  $value
     *
     * @return $this
     */
    public function add_additional_data( $key, $value ) {
        $additional_data = $this->get_additional_data_array();

        $additional_data[ $key ] = $value;

        $this->additional_data = json_encode( $additional_data );

        return $this;
    }

    /**
     * @return array
     */
    public function get_additional_data_array() {
        $additional_data = [];
        if ( $this->additional_data && is_string( $this->additional_data ) ) {
            $additional_data = (array) json_decode( $this->additional_data, true );
        }

        return $additional_data;
    }

    /**
     * Helper method for retrieving some values from additional data
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return array
     */
    public function get_from_additional_data( $key, $default = null ) {
        return $this->get_additional_data_array()[ $key ] ?? $default;
    }

    /**
     * @return WP_Error|Context|null
     */
    public function get_context() {
        if ( $this->data['context'] ) {
            return Context::createFromParams( $this->data['context'], false );
        }

        return null;
    }

    /**
     * @param string $mac
     *
     * @return bool
     */
    public function verify( $mac ) {
        return hash_equals( $mac, $this->get_mac() );
    }

    /**
     * @param string|array|object $data
     *
     * @return $this
     */
    public function populate( $data ) {
        $quizle_type  = 'none';
        $quizle_title = '';

        if ( ! empty( $data['quiz_id'] ) ) {
            $quizle       = get_post( $data['quiz_id'] );
            $quizle_type  = get_quizle_type( $data['quiz_id'] );
            $quizle_title = $quizle->post_title;
        }

        $this->data = wp_parse_args( $data, [
            'quiz_id'         => 0,
            'user_id'         => 0,
            'user_cookie'     => '',
            'result_data'     => [
                'data_version'                    => '1.5',
                'quizle_title'                    => $quizle_title,
                'questions'                       => [],
                'total_score'                     => 0, // used for test
                'total_score_with_hint_penalties' => 0,
                'max_result_match'                => null, // used for variable
                'quizle_type'                     => $quizle_type,
            ],
            'name'            => '',
            'email'           => '',
            'phone'           => '',
            'additional_data' => '',
            'context'         => '',
        ] );

        return $this;
    }

    /**
     * @param array    $answer_data
     * @param int|null $quizle_id
     *
     * @return $this
     */
    public function prepare_result_data( array $answer_data, $quizle_id = null ) {
        if ( null === $quizle_id ) {
            $quizle_id = $this->quiz_id;
        }

        if ( ! $quizle_id ) {
            return $this;
        }

        $type      = get_quizle_type( $quizle_id );
        $questions = get_post_meta( $quizle_id, 'quizle-questions', true );
        if ( ! empty( $questions ) ) {
            $questions = json_decode( $questions, true );
//        } else {
//            $this->result_data = [];
//
//            return $this;
        }

        $result_data = $this->get_result_data_array();

        $result_data['questions'] = [];

//        $result_data = [
//            'data_version'     => '1.1',
//            'questions'        => [],
//            'total_score'      => 0, // used for test
//            'max_result_match' => null, // used for variable
//            'quizle_type'      => get_quizle_type( $quizle_id ),
//        ];

        $result_matches = [];

        foreach ( $questions as $question ) {
            $to_store_question = [
                'question_id' => $question['question_id'],
                'title'       => $question['title'],
                'type'        => $question['type'],
                'required'    => $question['required'],
                'is_multiple' => $question['is_multiple'],
                'conditional' => (int) ! empty( $question['conditions'] ),
                'answers'     => [],
            ];

            if ( in_array( $question['type'], [ 'text', 'textarea' ] ) ) {
                if ( array_key_exists( $question['question_id'], $answer_data ) ) {
                    foreach ( (array) $answer_data[ $question['question_id'] ] as $user_answer ) {
                        $user_answer_value = trim( $user_answer['val'] );
                        $to_store_answer   = [
                            'name'      => '',
                            'answer_id' => '__text__',
                            'value'     => $user_answer_value,
                            '_checked'  => $user_answer_value ? 1 : 0,
                        ];

                        /**
                         * @since 1.0
                         */
                        $count_text_input = apply_filters( 'quizle/result/count_tests_text_inputs', false );
                        if ( $count_text_input ) {
                            if ( $user_answer_value ) {
                                $result_data['total_score'] ++;
                            }
                        }

                        $to_store_question['answers'][] = $to_store_answer;
                    }
                }
            } else if ( $question['type'] == 'file' ) {
                if ( array_key_exists( $question['question_id'], $answer_data ) ) {
                    foreach ( (array) $answer_data[ $question['question_id'] ] as $user_answer ) {
                        $user_answer_value = [];
                        /**
                         * @see \Wpshop\Quizle\FileUploadHandler::handle()
                         */
                        foreach ( (array) $user_answer['val'] as $file_data ) {
                            $file_data = wp_parse_args( $file_data, [ 'url' => '' ] );
                            if ( $file_data['url'] ) {
                                $user_answer_value[] = trim( $file_data['url'] );
                            }
                        }
                        $to_store_answer = [
                            'name'      => '',
                            'answer_id' => '__file__',
                            'value'     => $user_answer_value,
                            '_checked'  => 1,
                        ];

                        /**
                         * @since 1.4
                         */
                        $count_file_inputs = apply_filters( 'quizle/result/count_tests_file_inputs', false );
                        if ( $count_file_inputs ) {
                            if ( $user_answer_value ) {
                                $result_data['total_score'] ++;
                            }
                        }

                        $to_store_question['answers'][] = $to_store_answer;
                    }
                }
            } else {
                foreach ( $question['answers'] as $defined_answer ) {
                    $result_matches[ $defined_answer['value'] ] = $result_matches[ $defined_answer['value'] ] ?? 0;
                    $to_store_answer                            = [
                        'name'      => $defined_answer['name'] ?? '',
                        'answer_id' => $defined_answer['answer_id'],
                        'value'     => $defined_answer['value'],
                        'type'      => $defined_answer['type'] ?? 'general',
                    ];
                    if ( array_key_exists( $question['question_id'], $answer_data ) ) {
                        foreach ( (array) $answer_data[ $question['question_id'] ] as $user_answer ) {
                            if ( $user_answer['answer'] === $defined_answer['answer_id'] ) {
                                $to_store_answer['_checked'] = 1;
                                if ( array_key_exists( 'custom_answer', $user_answer ) ) {
                                    $to_store_answer['_custom_answer'] = $user_answer['custom_answer'];
                                }
                                $result_data['total_score'] += floatval( $defined_answer['value'] );
                                $result_matches[ $defined_answer['value'] ] ++;
                            }
                        }
                    }

                    $to_store_question['answers'][] = $to_store_answer;
                }
            }

            $result_data['questions'][] = $to_store_question;
        }

        $result_matches = array_filter( $result_matches, function ( $key ) {
            return '' !== $key;
        }, ARRAY_FILTER_USE_KEY );

        if ( Quizle::TYPE_VARIABLE === $type && $result_matches ) {
            $result_data['max_result_match'] = array_keys( $result_matches, max( $result_matches ) )[0];
        }

        // calculate hint penalties
        if ( version_compare( $result_data['data_version'], '1.5', '>=' ) ) {

            /**
             * @since 1.6.0
             */
            $result_data['penalties'] = apply_filters( 'quizle/result/penalties', $result_data['penalties'], $result_data, $answer_data, $quizle_id );

            $hint_penalties = array_reduce( ( $result_data['penalties'] ?? [] ), function ( $carry, $question_penalties ) {
                foreach ( ( $question_penalties['items'] ?? [] ) as $item ) {
                    $carry = $carry + intval( $item['penalty'] );
                }

                return $carry;
            }, 0 );

            $result_data['total_score_with_hint_penalties'] = $result_data['total_score'] - $hint_penalties;
        } else {
            $result_data['total_score_with_hint_penalties'] = $result_data['total_score'];
        }

        $result_data['result_item'] = $this->calculate_result(
            max( 0, $result_data['total_score_with_hint_penalties'] ),// $result_data['total_score'],
            $result_data['max_result_match'],
        );

        $this->result_data = $result_data;

        return $this;
    }

    /**
     * @param array $penalties
     *
     * @return $this
     */
    public function add_hint_penalties( $penalties ) {
        // todo compare $penalties with stored data

        $result_data = $this->get_result_data_array();
        if ( is_array( $result_data ) ) {
            $result_data['penalties'] = $penalties;

            $this->result_data = $result_data;
        } else {
            trigger_error( 'Unable to add penalties for quizle result data', E_USER_WARNING );
        }

        return $this;
    }

    /**
     * @param string $question_id
     *
     * @return int|null
     */
    public function get_hint_penalty( $question_id ) {
        if ( null === $this->_hint_penalties ) {
            $this->_hint_penalties = [];

            $data = $this->get_result_data_array();
            if ( version_compare( $data['data_version'], '1.5', '>=' ) ) {
                $penalties = $data['penalties'] ?? [];



                foreach ( $penalties as $question_penalties ) {
                    $question_penalty = 0;
                    foreach ( $question_penalties['items'] as $item ) {
                        $question_penalty += $item['penalty'];
                    }

                    $this->_hint_penalties[ $question_penalties['question_id'] ] = $question_penalty;
                }
            }
        }

        if ( array_key_exists( $question_id, $this->_hint_penalties ) ) {
            return $this->_hint_penalties[ $question_id ];
        }

        return null;
    }

    /**
     * @param int $time
     *
     * @return $this
     */
    public function set_created_time( $time = null ) {
        /**
         * @since 1.5
         */
        $current_time = apply_filters(
            'quizle/quizle_result/created_time',
            null !== $time ? $time : current_time( 'mysql', true ),
            $time,
            $this
        );

        $this->created_at = $current_time;

        return $this;
    }

    /**
     * @return $this
     */
    public function generate_unique_token() {
        $this->token = generate_string( 32 );

        return $this;
    }

    /**
     * @param int $time
     *
     * @return $this
     */
    public function set_finished_time( $time = null ) {
        /**
         * @since 1.5
         */
        $current_time = apply_filters(
            'quizle/quizle_result/finished_time',
            null !== $time ? $time : current_time( 'mysql', true ),
            $time,
            $this
        );

        $this->finished_at = $current_time;

        return $this;
    }

    /**
     * @return array
     */
    public function get_result_data_array() {
        if ( $this->result_data && is_string( $this->result_data ) ) {
            return (array) json_decode( $this->result_data, true );
        }

        return $this->result_data;
    }

    /**
     * @return array
     */
    public function get_result_data_questions() {
        $stored_questions  = $this->get_result_data_array()['questions'] ?? [];
        $stored_questions  = $this->clone_array( $stored_questions );
        $defined_questions = get_post_meta( $this->quiz_id, 'quizle-questions', true );
        if ( ! empty( $stored_questions ) ) {
            $defined_questions = json_decode( $defined_questions, true );
        } else {
            $defined_questions = [];
        }


        foreach ( $stored_questions as &$stored_question ) {
            if ( ! in_array( $stored_question['type'], [ 'image_horizontal', 'image_vertical' ] ) ) {
                continue;
            }
            foreach ( $defined_questions as $defined_question ) {
                if ( ! in_array( $defined_question['type'], [ 'image_horizontal', 'image_vertical' ] ) ) {
                    continue;
                }

                foreach ( $stored_question['answers'] as &$stored_answer ) {
                    foreach ( $defined_question['answers'] as $defined_answer ) {
                        if ( $defined_answer['answer_id'] === $stored_answer['answer_id'] ) {
                            $stored_answer['image'] = $defined_answer['image'];
                        }
                    }
                }
            }
        }

        return $stored_questions;
    }

    /**
     * @param array $array
     *
     * @return array
     */
    protected function clone_array( $array ) {
        return array_map( function ( $element ) {
            return is_array( $element ) ? $this->clone_array( $element ) : ( ( is_object( $element ) ) ? clone $element : $element );
        }, $array );
    }

    /**
     * @return array|null
     */
    public function get_result_item() {
        return $this->get_result_data_array()['result_item'] ?? null;
    }

    /**
     * @return array [$content, $redirect_link]
     * @throws \Exception
     */
    public function get_result_content() {
        if ( ! ( $result = $this->get_result_item() ) ) {
            return [ null, null ];
        }

        if ( ! empty( $result['redirect_link'] ) ) {
            return [ '', $result['redirect_link'] ];
        }

        $content = ob_get_content( function () use ( $result ) {

            $classes = [ 'quizle-image-screen' ];
            if ( ! empty( $result['image'] ) ) {
                $classes[] = 'quizle-image-screen--img-position-' . $result['image_position'];
            }

            $args = [
                'result'         => $this,
                'result_item'    => $result,
                'classes'        => implode( ' ', $classes ),
                'image'          => $result['image'],
                'image_position' => $result['image_position'],
                'title'          => $result['title'],
                'description'    => $result['description'],
                'btn_text'       => $result['btn_text'],
                'link'           => $result['link'] ?? '#',
                'style'          => '',
            ];

            if ( 'background' === $result['image_position'] ) {
                $args['style'] = 'background-image: url("' . $result['image'] . '")';
            }

            return get_template_part( '_result', null, $args );
        } );

        return [ $content, null ];
    }

    /**
     * @param array $params
     *
     * @return array|null
     */
    protected function calculate_result( $total_score, $max_result_match ) {
        if ( ! ( $quizle = get_post( $this->quiz_id ) ) ) {
            return null;
        }

        $result_enabled = get_post_meta( $quizle->ID, 'result-enabled', true );
        if ( ! $result_enabled ) {
            return null;
        }

        $type            = get_quizle_type( $quizle );
        $defined_results = get_post_meta( $quizle->ID, 'quizle-results', true );
        if ( ! empty( $defined_results ) ) {
            $defined_results = json_decode( $defined_results, true );
        }
        if ( empty( $defined_results ) ) {
            return null;
        }

        if ( Quizle::TYPE_TEST === $type ) {
            $defined_results = array_filter( $defined_results, function ( $result ) use ( $total_score ) {
                $result = wp_parse_args( $result, [
                    'value_min' => '',
                    'value_max' => '',
                ] );

                $min = $result['value_min'];
                $max = $result['value_max'];
                if ( '' === $min && '' === $max ) {
                    return false;
                }
                $can_show = true;
                if ( '' !== $min && $total_score < $min ) {
                    $can_show = false;
                }
                if ( '' !== $max && $total_score > $max ) {
                    $can_show = false;
                }

                return $can_show;
            } );
        } elseif ( Quizle::TYPE_VARIABLE === $type ) {
            $result_match = intval( $max_result_match );

            $defined_results = array_filter( $defined_results, function ( $result ) use ( $result_match ) {
                return intval( $result['id'] ) === $result_match;
            } );
        }

        return end( $defined_results );
    }

    /**
     * @return array
     */
    public function to_array() {
        $result = $this->data;
        foreach ( $this->fields_to_json as $field ) {
            if ( is_array( $result[ $field ] ) ) {
                $result[ $field ] = json_encode(
                    $result[ $field ],
                    JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE
                );
            }
        }

        return $result;
    }

    /**
     * @param string $name
     *
     * @return mixed|null
     */
    public function __get( $name ) {
        return array_key_exists( $name, $this->data ) ? $this->data[ $name ] : null;
    }

    /**
     * @param string $name
     * @param mixed  $value
     *
     * @return void
     */
    public function __set( $name, $value ) {
        $this->data[ $name ] = $value;
    }
}
