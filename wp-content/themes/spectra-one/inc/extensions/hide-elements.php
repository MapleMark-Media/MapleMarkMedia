<?php
/**
 * Hide Elements
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

add_filter( 'render_block', SWT_NS . 'hide_elements', 10, 2 );

/**
 * Hide Elements.
 *
 * @since 0.0.1
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function hide_elements( string $block_content, array $block ): string {
	$post_id = absint( get_the_ID() );

	if ( get_post_meta( $post_id, '_swt_meta_header_display', true ) ) {

		if ( isset( $block['attrs']['slug'] ) && 'header' === $block['attrs']['slug'] ) {
			return '';
		}
	}

	if ( get_post_meta( $post_id, '_swt_meta_footer_display', true ) ) {

		if ( isset( $block['attrs']['slug'] ) && 'footer' === $block['attrs']['slug'] ) {
			return '';
		}
	}

	return $block_content;
}


/**
 * Get disable section fields.
 *
 * @return array $swt_page_meta_elements All toggle based page elements.
 */
function get_disable_section_fields():array {
	$swt_page_meta_elements = array(
		array(
			'key'   => '_swt_meta_header_display',
			'label' => __( 'Disable Header', 'spectra-one' ),
		),
		array(
			'key'   => '_swt_meta_footer_display',
			'label' => __( 'Disable Footer', 'spectra-one' ),
		),
	);

	return $swt_page_meta_elements;
}
