<?php
/**
 * Latest post block.
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

add_filter( 'render_block_core/latest-posts', SWT_NS . 'render_latest_post_block', 10, 2 );

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
function render_latest_post_block( string $html, array $block ): string {
  
	if ( isset( $block['attrs']['displayFeaturedImage'] ) && true === $block['attrs']['displayFeaturedImage'] ) {
		$dom     = dom( $html );
		$element = get_dom_element( '*', $dom );
	
		if ( ! $element ) {
			return $html;
		}
	
		$classes = $element->getAttribute( 'class' );
		$element->setAttribute( 'class', $classes . ' swt-has-featured-image' );
		$html = $dom->saveHTML();
	}
	
	return $html;
}
