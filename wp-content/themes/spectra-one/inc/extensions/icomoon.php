<?php
/**
 * Icomoon functions
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

add_filter( 'block_editor_settings_all', SWT_NS . 'icomoon_block_editor_css', 10, 2 ); 

add_filter( 'render_block', SWT_NS . 'render_icomoon', 10, 2 );

/**
 * Icomoon render function.
 * 
 * @since 1.0.0
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function render_icomoon( string $block_content, array $block ):string {

	if ( ( isset( $block['blockName'] ) && 'core/archives' === $block['blockName'] ) || ( isset( $block['blockName'] ) && 'core/categories' === $block['blockName'] ) ) {
		if ( isset( $block['attrs']['displayAsDropdown'] ) && true === $block['attrs']['displayAsDropdown'] ) {
			add_filter( 'swt_dynamic_theme_css', SWT_NS . 'icomoon_inline_css' );
		}
	}

	return $block_content;
}

/**
 * Load icomoon inline css.
 *
 * @since 1.0.0
 * @param string $css Inline CSS.
 * @return string
 */
function icomoon_inline_css( string $css ): string {
	return $css .= icomoon_import_fonts();
}


/**
 * Load icomoon editor inline css.
 *
 * @since 1.0.0
 * @param array $editor_settings Inline CSS.
 * @return array
 */
function icomoon_block_editor_css( array $editor_settings ):array {

	$editor_settings['styles'][] = array( 'css' => icomoon_import_fonts() );

	return $editor_settings;
} 
/**
 * Import icomoon fonts.
 *
 * @since 1.0.0
 * @return string
 */
function icomoon_import_fonts():string {

	$css_output = array(

		'@font-face' => array(
			'font-family'  => 'icomoon',
			'src'          => 'url("' . get_uri() . 'assets/font-icons/icomoon.eot"),url("' . get_uri() . 'assets/font-icons/icomoon.eot") format("embedded-opentype"),url("' . get_uri() . 'assets/font-icons/icomoon.ttf") format("truetype"),url("' . get_uri() . 'assets/font-icons/icomoon.woff") format("woff"),url("' . get_uri() . 'assets/font-icons/icomoon.svg") format("svg")',
			'font-weight'  => 'normal',
			'font-style'   => 'normal',
			'font-display' => 'block',
		),
	);

	return parse_css( $css_output );
}	
