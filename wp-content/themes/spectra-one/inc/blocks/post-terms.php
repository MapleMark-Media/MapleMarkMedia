<?php
/**
 * Post post terms block.
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 1.0.0
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'render_block_core/post-terms', SWT_NS . 'render_post_terms_block', 10, 2 );


/**
 * Modifies front end HTML output of block.
 *
 * @since 1.0.0
 *
 * @param string $html  Block HTML.
 * @param array  $block Block data.
 *
 * @return string
 */
function render_post_terms_block( string $html, array $block ): string {

	if ( isset( $block['blockName'] ) && 'core/post-terms' === $block['blockName'] ) {
		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'post_terms_inline_css' );
	}
	return $html;
}


/**
 * Load Inline Css.
 *
 * @since 1.0.0
 * @param string $css Inline CSS.
 * @return string
 */
function post_terms_inline_css( string $css ): string {

	$css_output = array(
		'.wp-block-post-terms a' => array(
			'color' => 'inherit',
		),
	);

	$css .= parse_css( $css_output );
	return $css;
}
