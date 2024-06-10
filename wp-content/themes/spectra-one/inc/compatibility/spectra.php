<?php
/**
 * Spectra Plugin compatibility
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.3
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


add_filter( 'wp', SWT_NS . 'spectra_compatibility', 10, 2 );

// @codingStandardsIgnoreStart
/**
 * @psalm-suppress MissingClosureParamType
 * @psalm-suppress MissingClosureReturnType
 */
add_filter( 'uagb_default_blocks_editor_spacing', function( $spacing ) {
	$block_spacing = apply_filters( 'swt_spctr_editor_block_spacing', 15 );
	return $spacing > $block_spacing ? $spacing : $block_spacing;
});

/**
 * @psalm-suppress MissingClosureParamType
 * @psalm-suppress MissingClosureReturnType
 *
 * @param \WP_Theme_JSON_Data|\WP_Theme_JSON_Data_Gutenberg $theme_json Class instance object to provide access to update a theme.json structure.
 *
 * @since 1.1.1
 */
add_filter( 'wp_theme_json_data_user', function( $theme_json ) {

	/** @psalm-suppress UndefinedFunction */ // phpcs:ignore PossiblyFalseArgument, Generic.Commenting.DocComment.MissingShort -- Function exist in helpers.php
	if ( ! enable_default_spacing_paddings() ) {
		return $theme_json;
	}

	$json = $theme_json->get_data();

	$json['styles']['spacing']['padding'] = array(
		'right' => '24px',
		'left'  => '24px',
	);

	return $theme_json->update_with( $json );
} );
// @codingStandardsIgnoreEnd

/**
 * Spectra compatibility
 *
 * @since 0.0.3
 * @return void
 */
function spectra_compatibility() {
	if ( is_spectra_plugin() ) {
		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'spectra_compatibility_inline_css' );
	}
}

/**
 * Load spectra compatibility inline css.
 *
 * @since 0.0.3
 * @param string $css Inline CSS.
 * @return string
 */
function spectra_compatibility_inline_css( string $css ): string {

	$margin = 0;

		$css_output = array(
			"body [class*='uagb-block-']" => array(
				'margin-top'         => $margin . 'px',
				'margin-block-start' => $margin . 'px',
			),
		);

		/** @psalm-suppress UndefinedFunction */ // phpcs:ignore PossiblyFalseArgument, Generic.Commenting.DocComment.MissingShort -- Function exist in helpers.php
		if ( enable_default_spacing_paddings() ) {
			$css_output['.has-global-padding > .uagb-is-root-container.alignfull:not(.uagb-position__sticky--stuck)'] = array(
				'margin-right' => 'calc(var(--wp--style--root--padding-right) * -1)',
				'margin-left'  => 'calc(var(--wp--style--root--padding-left) * -1)',
			);
		}

		$css .= parse_css( $css_output );

		return $css;
}
