<?php
/**
 * Header functions
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

add_filter( 'render_block', SWT_NS . 'render_dynamic_variables', 10, 2 );

/**
 * Header render function.
 *
 * @since 1.0.2
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function render_dynamic_variables( string $block_content, array $block ):string {

	if ( isset( $block['blockName'] ) && ( 'core/navigation-submenu' === $block['blockName'] || 'core/navigation-link' === $block['blockName'] ) && get_home_url() ) {

		$home_url              = preg_replace( '(^https?://)', '', home_url() );
		$shortcode_label       = array( '{site_url}' );
		$shortcode_label_value = array( $home_url );

		$dom  = dom( $block_content );
		$href = get_dom_element( 'a', $dom );

		if ( ! $href ) {
			return $block_content;
		}

		$current_href = $href->getAttribute( 'href' );

		$href->setAttribute( 'href', str_replace( $shortcode_label, $shortcode_label_value, urldecode( $current_href ) ) );

		$block_content = $dom->saveHTML();
	}
	
	return $block_content;
}
