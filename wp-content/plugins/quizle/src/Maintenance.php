<?php

namespace Wpshop\Quizle;

use Puc_v4_Factory;
use WP_Error;

/**
 * @deprecated
 */
class Maintenance {

    /**
     * @var string
     */
    protected $verify_url;

    /**
     * @var array
     */
    protected $update_cnf;

    /**
     * @param array{'verify_url':string, 'update':array} $config
     */
    public function __construct( $config ) {
        $this->verify_url = $config['verify_url'];
        $this->update_cnf = $config['update'];
    }

    /**
     * @return void
     */
    public function init_updates( $license, $plugin_file ) {
        Puc_v4_Factory::buildUpdateChecker(
            $this->update_cnf['url'],
            $plugin_file,
            $this->update_cnf['slug'],
            $this->update_cnf['check_period'],
            $this->update_cnf['opt_name']
        )->addQueryArgFilter( function ( $query_args ) use ( $license ) {
            if ( $license ) {
                $query_args['license_key'] = $license;
            }

            return $query_args;
        } );
    }

    /**
     * @param string   $license
     * @param callable $cb
     *
     * @return bool|WP_Error
     */
    public function activate( $license, $cb ) {
        if ( ! $this->verify_url ) {
            $cb( [
                'license_verify' => '',
                'license_error'  => __( 'Unable to check license without activation url', QUIZLE_TEXTDOMAIN ),
            ] );

            return new WP_Error( 'activation_failed', __( 'Unable to check license without activation url', QUIZLE_TEXTDOMAIN ) );
        }

        $args = [
            'timeout'   => 15,
            'sslverify' => false,
            'body'      => [
                'action'      => 'activate_license',
                'license'     => $license,
                'item_name'   => $this->get_metadata()['Name'],
                'version'     => $this->get_metadata()['Version'],
                'version_wp'  => get_bloginfo( 'version' ),
                'version_php' => PHP_VERSION,
                'locale'      => get_locale(),
                'type'        => 'plugin',
                'url'         => home_url(),
                'ip'          => get_ip(),
            ],
        ];

        foreach ( $this->verify_url as $url ) {
            $response = wp_remote_post( $url, $args );

            if ( is_wp_error( $response ) ) {
                continue;
            }

            $body = wp_remote_retrieve_body( $response );
            $data = json_decode( $body, true );

            if ( is_array( $data ) && isset( $data['success'] ) ) {
                if ( $data['success'] === true ) {
                    $cb( [
                        'license'        => $license,
                        'license_verify' => time() + ( WEEK_IN_SECONDS * 4 ),
                        'license_error'  => '',
                    ] );

                    return true;
                }

                $cb( [
                    'license'       => '',
                    'license_error' => $data['message'],
                ] );

                return new WP_Error( 'activation_failed', $data['message'] );
            }
        }

        $cb( [
            'license_verify' => '',
            'license_error'  => __( 'Can\'t get response from license server', QUIZLE_TEXTDOMAIN ),
        ] );

        return new WP_Error( 'activation_failed', __( 'Can\'t get response from license server', QUIZLE_TEXTDOMAIN ) );
    }

    /**
     * @return array
     */
    protected function get_metadata() {
        require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

        return get_plugin_data( QUIZLE_FILE, false, false );
    }
}
