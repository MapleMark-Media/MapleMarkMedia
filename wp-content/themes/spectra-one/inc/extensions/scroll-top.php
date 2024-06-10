<?php
/**
 * Scroll Top
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

add_filter( 'wp', SWT_NS . 'scroll_top', 10, 2 );


/**
 * Scroll to top
 *
 * @since 1.0.2
 * @return void
 */
function scroll_top():void {
	$global_theme_options = get_option( 'swt_theme_options' );

	$is_scroll_top_enabled = isset( $global_theme_options['scroll_top'] ) ? $global_theme_options['scroll_top'] : false;

	if ( $is_scroll_top_enabled ) {
		add_filter( 'wp_footer', SWT_NS . 'render_scroll_top', 10, 2 );
		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'scroll_top_inline_css' );
		add_filter( 'swt_dynamic_theme_js', SWT_NS . 'scroll_top_js' );
	}
}

/**
 * Render scroll to top
 *
 * @since 1.0.2
 * @return void
 */
function render_scroll_top():void {
	/** @psalm-suppress UndefinedFunction */ // phpcs:ignore PossiblyFalseArgument, Generic.Commenting.DocComment.MissingShort -- Function exist in helpers.php 
	echo fetch_svg_icon( 'arrow-top', 'swt-scroll-top', false ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Required to get svg.json.
}

/**
 * Scroll top inline css.
 *
 * @since 1.0.2
 * @param string $css Inline CSS.
 * @return string
 */
function scroll_top_inline_css( string $css ): string {

	$css_output = array(
		'.swt-scroll-top'          => array(
			'display'          => 'flex',
			'align-items'      => 'center',
			'justify-content'  => 'center',
			'position'         => 'fixed',
			'right'            => 'var(--wp--preset--spacing--small)',
			'bottom'           => 'var(--wp--preset--spacing--small)',
			'width'            => 'var(--wp--preset--spacing--large)',
			'height'           => 'var(--wp--preset--spacing--large)',
			'background-color' => 'var(--wp--preset--color--primary)',
			'border-radius'    => 'var(--wp--custom--border-radius--full)',
			'cursor'           => 'pointer',
			'transform'        => 'scale(0)',
			'transition'       => '.2s',

		),

		'.swt-scroll-top svg path' => array(
			'stroke' => 'var(--wp--preset--color--background)',
		),
	);

	$css .= parse_css( $css_output );

	return $css;
}


/**
 * Scroll top inline js.
 *
 * @since 1.0.2
 * @param string $js Inline JS.
 * @return string
 */
function scroll_top_js( string $js ): string {
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

	const scrollTop = document.querySelector('.swt-scroll-top');
	docReady(function() {
		scrollTop.addEventListener('click', function() {
			window.scrollTo({top: 0, behavior: 'smooth'});
		})
	});

	window.addEventListener("scroll", function(){
		if( window.scrollY >= 100 ) {
			scrollTop.style.transform  = 'scale(1)';
		} else {
			scrollTop.style.transform  = 'scale(0)';
		}
	}, true);

JS;
	$js       .= $inline_js;
	return $js;
}
