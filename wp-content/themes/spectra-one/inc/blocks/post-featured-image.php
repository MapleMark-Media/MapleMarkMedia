<?php
/**
 * Post Feature image Block.
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.1
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'render_block_core/post-featured-image', SWT_NS . 'render_featured_image_block', 10, 2 );

/**
 * Modifies front end HTML output of block.
 *
 * @since 0.0.1
 *
 * @param string $html  Block HTML.
 * @param array  $block Block data.
 *
 * @return string
 */
function render_featured_image_block( string $html, array $block ): string {
	if ( ! $html && ! ( is_single() || is_page() ) && isset( $block['attrs'] ) ) {
		$html = render_image_placeholder( $html, $block['attrs'] );
		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'post_featured_image_inline_css' );
	}
	return $html;
}


/**
 * Load Inline Css.
 *
 * @since 0.0.1
 * @param string $css Inline CSS.
 * @return string
 */
function post_featured_image_inline_css( string $css ): string {

	$css_output = array(
		'.is-placeholder' => array(
			'position'        => 'relative',
			'width'           => '100%',
			'height'          => 'auto',
			'display'         => 'flex',
			'align-items'     => 'center',
			'justify-content' => 'center',
			'background'      => 'var(--wp--preset--color--surface)',
			'border'          => '0',
		),
	);

	$css .= parse_css( $css_output );
	return $css;
}
