<?php
/**
 * Post author block.
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

add_filter( 'render_block_core/post-author', SWT_NS . 'render_post_author_block', 10, 2 );


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
function render_post_author_block( string $html, array $block ): string {
	$post_id = get_the_ID();
	if ( isset( $block['blockName'] ) && 'core/post-author' === $block['blockName'] ) {
	
		if ( ! get_the_author_meta( 'description', $post_id ) ) {
			add_filter( 'swt_dynamic_theme_css', SWT_NS . 'remove_author_bio' );
		}

		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'post_author_inline_css' );
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
function post_author_inline_css( string $css ): string {

	$css_output = array(
		'.wp-block-post-author__bio' => array(
			'font-size' => 'inherit',
		),
	);

	$css .= parse_css( $css_output );
	return $css;
}

/**
 * Remove author bio.
 *
 * @since 1.0.0
 * @param string $css Inline CSS.
 * @return string
 */
function remove_author_bio( string $css ): string {
	$css_output = array(
		'.is-style-swt-post-author-simple .wp-block-post-author__bio' => array(
			'display' => 'none',
		),
	);

	$css .= parse_css( $css_output );
	return $css;

}
