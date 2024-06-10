<?php
/**
 * Admin Global settings route.
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 1.0.2
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'rest_api_init', SWT_NS . 'create_rest_routes' );

/**
 * Creating rest routes
 *
 * @since 1.0.2
 * @return void
 */
function create_rest_routes():void {
	register_rest_route(
		'swt/v1',
		'/global_settings',
		array(
			array(
				'methods'             => \WP_REST_Server::READABLE,
				'callback'            => SWT_NS . 'swt_get_global_settings',
				'permission_callback' => function () {
					return true;
				},
			),
			array(
				'methods'             => \WP_REST_Server::EDITABLE,
				'callback'            => SWT_NS . 'swt_update_global_settings',
				'permission_callback' => function () {
					return current_user_can( 'edit_theme_options' );
				},
			),
		)
	);
}

/**
 * Get configs
 * 
 * @since 1.0.2
 * @param \WP_REST_Request $request Full details about the request.
 * @return \WP_REST_Response|\WP_Error Response object on success, or WP_Error object on failure.
 */
function swt_get_global_settings( \WP_REST_Request $request ) {
	$settings = get_option( 'swt_theme_options' );

	return rest_ensure_response( $settings );  
}



/**
 * Set configs
 *
 * @param \WP_REST_Request $request Full details about the request.
 * @return \WP_REST_Response|\WP_Error Response object on success, or WP_Error object on failure.
 * @since 1.0.2
 */
function swt_update_global_settings( \WP_REST_Request $request ) {

	$fields = isset( $request['setting'] ) ? $request['setting'] : array();

	if ( ! empty( $fields ) ) {
		update_option( 'swt_theme_options', $fields );
	}

	return rest_ensure_response( 'success' );  

}
