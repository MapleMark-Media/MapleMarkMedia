<?php
/**
 * Meta Box
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.1
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'init', SWT_NS . 'register_meta_settings' );

/**
 * Register Post Meta options for react based fields.
 *
 * @since 0.0.1
 * @return void
 */
function register_meta_settings():void {
	register_post_meta(
		'',
		'_swt_meta_header_display',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'boolean',
			'auth_callback' => '__return_true',
		)
	);

	register_post_meta(
		'',
		'_swt_meta_footer_display',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'boolean',
			'auth_callback' => '__return_true',
		)
	);

	register_post_meta(
		'',
		'_swt_meta_site_title_display',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'boolean',
			'auth_callback' => '__return_true',
		)
	);

	register_post_meta(
		'',
		'_swt_meta_sticky_header',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'boolean',
			'auth_callback' => '__return_true',
		)
	);

	register_post_meta(
		'',
		'_swt_meta_transparent_header',
		array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'boolean',
			'auth_callback' => '__return_true',
		)
	);
}
