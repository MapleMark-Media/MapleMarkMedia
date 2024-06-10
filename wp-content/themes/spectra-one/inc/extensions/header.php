<?php
/**
 * Header functions
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

add_filter( 'render_block', SWT_NS . 'render_header', 10, 2 );

/**
 * Header render function.
 *
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function render_header( string $block_content, array $block ):string {
	$post_id = get_the_ID();

	/** @psalm-suppress PossiblyFalseArgument */ // phpcs:ignore PossiblyFalseArgument, Generic.Commenting.DocComment.MissingShort
	$sticky_header_condition = ( isset( $block['attrs']['SWTStickyHeader'] ) && true === $block['attrs']['SWTStickyHeader'] ) || get_post_meta( $post_id, '_swt_meta_sticky_header', true );

	/** @psalm-suppress PossiblyFalseArgument */ // phpcs:ignore PossiblyFalseArgument, Generic.Commenting.DocComment.MissingShort
	$transparent_header_condition = ( isset( $block['attrs']['SWTTransparentHeader'] ) && true === $block['attrs']['SWTTransparentHeader'] ) || get_post_meta( $post_id, '_swt_meta_transparent_header', true );

	/** @psalm-suppress PossiblyFalseArgument */ // phpcs:ignore PossiblyFalseArgument, Generic.Commenting.DocComment.MissingShort
	$not_transparent_header_condition = ! ( isset( $block['attrs']['SWTTransparentHeader'] ) ) || ( isset( $block['attrs']['SWTTransparentHeader'] ) && false === $block['attrs']['SWTTransparentHeader'] ) || ( get_post_meta( $post_id, '_swt_meta_transparent_header', true ) );

	if ( $sticky_header_condition && ! get_post_meta( $post_id, '_swt_meta_transparent_header', true ) ) {

		$dom    = dom( $block_content );
		$header = get_dom_element( 'header', $dom );

		if ( ! $header ) {
			return $block_content;
		}

		$classes = $header->getAttribute( 'class' );
		$header->setAttribute( 'class', $classes . ' swt-sticky-header' );

		$block_content = $dom->saveHTML();

		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'header_sticky_inline_css' );

		if ( $not_transparent_header_condition ) {
			add_filter( 'swt_dynamic_theme_js', SWT_NS . 'header_sticky_inline_js' );
			add_filter( 'swt_dynamic_theme_css', SWT_NS . 'header_shadow_inline_css' );
		}
	}

	if ( $transparent_header_condition && ! get_post_meta( $post_id, '_swt_meta_sticky_header', true ) ) {
		
		$dom    = dom( $block_content );
		$header = get_dom_element( 'header', $dom );

		if ( ! $header ) {
			return $block_content;
		}

		$classes = $header->getAttribute( 'class' );
		$header->setAttribute( 'class', $classes . ' swt-transparent-header' );

		$block_content = $dom->saveHTML();

		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'header_transparent_inline_css' );
	}

	if ( $sticky_header_condition || $transparent_header_condition ) {
		add_filter( 'swt_dynamic_theme_js', SWT_NS . 'header_wp_admin_bar_spacing_js' );
	}

	return $block_content;
}

/**
 * Load header inline css.
 *
 * @since 1.0.1
 * @param string $css Inline CSS.
 * @return string
 */
function header_shadow_inline_css( string $css ): string {

	$css_output = array(
		'.swt-sticky-header.swt-sticky-header-active' => array(
			'box-shadow' => '0px 8px 24px -8px rgba(0, 0, 0, 0.08)',
			'transition' => '.2s ease-in-out',
		),
	);
	$css       .= parse_css( $css_output );
	return $css;
}

/**
 * Load header inline css.
 *
 * @since 0.0.1
 * @param string $css Inline CSS.
 * @return string
 */
function header_sticky_inline_css( string $css ): string {

	// Sticky header option.
	$css_output = array(
		'.swt-sticky-header' => array(
			'position' => 'fixed',
			'top'      => '0',
			'left'     => '0',
			'width'    => '100%',
			'z-index'  => '999',
		),
	);
	$css       .= parse_css( $css_output );
	return $css;
}

/**
 * Load header inline js.
 *
 * @since 0.0.1
 * @param string $js Inline JS.
 * @return string
 */
function header_sticky_inline_js( string $js ): string {
	$inline_js = <<<JS

	function docReady(fn) {
		// see if DOM is already available
		if (document.readyState === "complete" || document.readyState === "interactive") {
			// call on next available tick
			setTimeout(fn, 1);
		} else {
			document.addEventListener("DOMContentLoaded", fn);
		}
	}

	function stickyHeaderSpacing() {
		// Sticky header option.
		const header = document.querySelector( '.swt-sticky-header' );
		const body = document.querySelector( 'body' );
		if( header ) {

			const height = header.offsetHeight;

			if( height ) {
				body.style.paddingTop = parseFloat( height ) + 'px';
			}
		}
	}

	docReady(function() {
		stickyHeaderSpacing();
	});

	window.addEventListener("scroll", function(){
		const header = document.querySelector( '.swt-sticky-header' );

		if( header ) {
			if( window.scrollY >= 10 ) {
				header.classList.add('swt-sticky-header-active');
			} else {
				header.classList.remove('swt-sticky-header-active');
			}	
		}
	
	});

	window.addEventListener('resize', function(event) {
		stickyHeaderSpacing();
	}, true);
JS;
	$js       .= $inline_js;
	return $js;
}

/**
 * Load transparent header inline css.
 *
 * @since 0.0.1
 * @param string $css Inline CSS.
 * @return string
 */
function header_transparent_inline_css( string $css ): string {

	$css_output = array(
		'.wp-site-blocks'                           => array(
			'position' => 'relative',
		),

		'.swt-transparent-header'                   => array(
			'position' => 'absolute',
			'top'      => '0',
			'left'     => '0',
			'width'    => '100%',
			'z-index'  => '999',
		),

		'.swt-transparent-header > .has-background' => array(
			'background' => 'transparent !important',
		),
	);
	$css .= parse_css( $css_output );
	return $css;
}


/**
 * Load header wp_admin_bar spacing inline js.
 *
 * @since 0.0.1
 * @param string $js Inline JS.
 * @return string
 */
function header_wp_admin_bar_spacing_js( string $js ): string {
	$inline_js = <<<JS
	function docReady(fn) {
		// see if DOM is already available
		if (document.readyState === "complete" || document.readyState === "interactive") {
			// call on next available tick
			setTimeout(fn, 1);
		} else {
			document.addEventListener("DOMContentLoaded", fn);
		}
	}

	function wpAdminPaddingOffset() {
		const wpAdminBar = document.querySelector('#wpadminbar');
		const header = document.querySelector( 'header' );


		if( header && wpAdminBar && ! header.classList.contains('swt-transparent-header') ) {
			header.style.top = wpAdminBar.offsetHeight + 'px';
		}
	}

	docReady(function() {
		wpAdminPaddingOffset();
	});

	window.addEventListener('resize', function(event) {
		wpAdminPaddingOffset();
	}, true);

JS;
	$js       .= $inline_js;
	return $js;
}
