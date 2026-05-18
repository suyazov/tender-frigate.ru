<?php

defined( 'WPINC' ) || die;

/** @var \Wpshop\Quizle\QuizleResult $result */
$result = $args['result'];

echo "*Новая заявка с квиза*\n\n";

if ( $result->name ) {
    printf( "👤 %s\n", esc_html( $result->name ) );
}
if ( $result->phone ) {
    printf( "📞 [%s](tel:%s)\n", esc_html( $result->phone ), esc_html( $result->phone ) );
}

echo "\n*Ответы:*\n";

foreach ( $result->get_result_data_questions() as $question ) {
    printf( "\n_%s_\n", esc_html( $question['title'] ) );
    foreach ( $question['answers'] ?? [] as $answer ) {
        if ( ! empty( $answer['_checked'] ) ) {
            echo esc_html( $answer['name'] ) . "\n";
        }
    }
}
