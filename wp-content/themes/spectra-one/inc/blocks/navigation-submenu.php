<?php
/**
 * Navigation submenu block.
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

add_filter( 'render_block_core/navigation-submenu', SWT_NS . 'render_navigation_submenu_block', 10, 2 );


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
function render_navigation_submenu_block( string $html, array $block ): string {

	if ( isset( $block['blockName'] ) && 'core/navigation-submenu' === $block['blockName'] ) {
		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'navigation_submenu_inline_css' );
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
function navigation_submenu_inline_css( string $css ): string {

	$css_output = array(
		'.wp-block-navigation-item.has-child .wp-block-navigation-item.has-child' => array(
			'color' => 'inherit !important',
		),
	);

	$css .= parse_css( $css_output );
	return $css;
}
