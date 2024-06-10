<?php
/**
 * Navigation block.
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 1.0.6
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'render_block_core/navigation', SWT_NS . 'render_navigation_block', 10, 2 );


/**
 * Modifies front end HTML output of block.
 *
 * @since 1.0.0
 *
 * @param string $block_content  Block HTML.
 * @param array  $block Block data.
 *
 * @return string
 */
function render_navigation_block( string $block_content, array $block ): string {

	if ( isset( $block['blockName'] ) && 'core/navigation' === $block['blockName'] ) {

		/**
		* Remove this once WordPress fixes this issue in 6.3 and above, Where it add the same classes to sub navigation which causes color issue.
		* Start
		*/

		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'navigation_inline_css' );

		$dom     = dom( $block_content );
		$element = get_dom_element( 'ul', $dom );

		if ( ! $element ) {
			return $block_content;
		}

		$classes = $element->getAttribute( 'class' );


		if ( str_contains( $classes, 'wp-block-navigation__container' ) ) {
			$element->setAttribute( 'class', 'wp-block-navigation__container' );
		}
		$block_content = $dom->saveHTML();

		/**
		* End
		*/

	}

	return $block_content;
}



/**
 * Load Inline Css.
 *
 * @since 1.0.6
 * @param string $css Inline CSS.
 * @return string
 */
function navigation_inline_css( string $css ): string {
	$css_output = array();

	if ( true === apply_filters( 'swt_modal_menu_center', true ) ) {
		$css_output = array(
			'.wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content, .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation-item, .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__container, .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-page-list' => array(
				'align-items' => 'center',
			),
		);
	}

	$css .= parse_css( $css_output );
	return $css;
}
