<?php
/**
 * Admin bar config
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 1.0.0
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'admin_bar_menu', SWT_NS . 'add_admin_menu', 90, 1 );

/**
 * Add Admin menu item.
 *
 * @param object \WP_Admin_Bar $admin_bar Admin bar.
 * @since 1.0.0
 * @return void
 */
function add_admin_menu( \WP_Admin_Bar $admin_bar ):void {
	
	if ( is_admin() ) {
		return;
	}

	// Check if current user can have edit access.
	if ( ! current_user_can( 'edit_posts' ) ) {
		return;
	}

	global $_wp_current_template_content;
	$id                  = '';
	$get_block_templates = get_block_templates();
	$template_path       = get_post_meta( get_the_ID(), '_wp_page_template', true );

	foreach ( $get_block_templates as $single ) {

		if ( $template_path && isset( $single->slug ) && $single->slug === $template_path ) {
			$id = $single->id;
			break;
		}

		if ( isset( $single->content ) && $single->content === $_wp_current_template_content ) {
			$id = $single->id;
			break;
		}
	}

	$admin_bar->add_menu(
		array(
			'id'     => 'swt-edit-template',
			'parent' => null,
			'group'  => null,
			'title'  => '<span class="ab-icon dashicons-edit" style="top:2px"></span>' . __( 'Edit template', 'spectra-one' ),
			'href'   => admin_url( 'site-editor.php?postType=wp_template&postId=' . $id . '' ),
			'meta'   => array(
				'title' => __( 'Edit template', 'spectra-one' ), // This title will show on hover.
			),
		) 
	);
}
