<?php
/**
 * Post comments form block.
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

add_filter( 'render_block_core/post-comments-form', SWT_NS . 'render_post_comments_form_block', 10, 2 );


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
function render_post_comments_form_block( string $html, array $block ): string {

	if ( isset( $block['blockName'] ) && 'core/post-comments-form' === $block['blockName'] ) {
		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'post_comments_form_inline_css' );
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
function post_comments_form_inline_css( string $css ): string {

	$css_output = array(
		'.comment-form-comment textarea'               => array(
			'position' => 'relative',
			'z-index'  => '1',
		),

		'.comment-form-comment textarea:focus-visible' => array(
			'outline-color' => 'var(--wp--preset--color--heading)',
		),
	);

	$css .= parse_css( $css_output );
	return $css;
}
