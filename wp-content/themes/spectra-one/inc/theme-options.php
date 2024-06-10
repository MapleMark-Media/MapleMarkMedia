<?php
/**
 * Theme Options
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

/**
 * Get theme.json
 *
 * @since 0.0.1
 * @return array
 */
function get_theme_json(): array {
	ob_start();
	echo file_get_contents( SWT_DIR . 'theme.json' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Required to get svg.json.
	return json_decode( ob_get_clean(), true );
}

/**
 * Get custom styles
 *
 * @since 0.0.1
 * @return array
 */
function get_theme_custom_styles(): array {
	$args = array(
		'orderby'     => 'post_type',
		'post_status' => 'publish',
		'post_type'   => array( 'wp_global_styles' ),
		'name'        => 'wp-global-styles-spectra-one',
	);

	$export_posts  = get_posts( $args );
	$global_styles = '';

	/** @psalm-suppress PossiblyInvalidPropertyFetch */ // phpcs:ignore Generic.Commenting.DocComment.MissingShort -- Need to check isset for post_content.
	if ( isset( $export_posts[0] ) && isset( $export_posts[0]->post_content ) ) {
		$global_styles = $export_posts[0]->post_content;
	}

	/** @psalm-suppress PossiblyInvalidPropertyFetch */ // phpcs:ignore Generic.Commenting.DocComment.MissingShort -- Need to check isset for post id.
	$post_id = isset( $export_posts[0] ) ? $export_posts[0]->ID : '';

	return array(
		'ID'           => $post_id,
		'post_content' => $global_styles ? json_decode( stripslashes( $global_styles ), true ) : array(),
	);
}


/**
 * Get css variable prefix
 *
 * @since 1.0.2
 * @return string variable prefix
 */
function get_css_variable_prefix(): string {
	return '--wp--preset--color--';
}


/**
 * Get palette slugs
 *
 * @since 1.0.2
 * @return array Palette slugs.
 */
function get_palette_slugs(): array {
	return array(
		'wp--preset--color--primary',
		'wp--preset--color--secondary',
		'wp--preset--color--heading',
		'wp--preset--color--body',
		'wp--preset--color--background',
		'wp--preset--color--tertiary',
		'wp--preset--color--quaternary',
		'wp--preset--color--surface',
		'wp--preset--color--foreground',
		'wp--preset--color--outline',
		'wp--preset--color--neutral',
		'wp--preset--color--transparent',
		'wp--preset--color--current-color',
		'wp--preset--color--inherit',
	);
}

/**
 * Split font size and unit
 *
 * @since 1.0.2
 * @param string $font font size and unit.
 * @return array
 */
function split_font_size_and_unit( string $font ):array {

	if ( ! str_contains( $font, 'var:preset' ) ) {
		$font = preg_split( '/(?<=[0-9])(?=[a-z]+)/i', $font );
		return $font;
	} else {
		return array(
			'0' => $font,
		);
	}
}

/**
 * Get spectra one settings
 *
 * @since 1.0.2
 * @return array settings
 */
function get_spectra_one_settings(): array {
	$db_settings = get_theme_custom_styles();
	/** @psalm-suppress PossiblyUndefinedStringArrayOffset */ // phpcs:ignore Generic.Commenting.DocComment.MissingShort -- post_content will already be true in this case. As post_content attribute is static.
	$db_settings   = $db_settings['post_content'];
	$json_settings = get_theme_json();

	// Text defaults.
	$default_body_font_family     = 'inter';
	$default_body_font_family_raw = 'var:preset|font-family|inter';
	$default_body_font_variant    = '';
	$default_font_size_body       = 'var:preset|font-size|medium';
	$default_font_size_body_unit  = 'px';
	$default_body_font_weight     = '';
	$default_body_line_height     = '';

	// Headings default.
	$default_headings_font_family     = '';
	$default_headings_font_family_raw = '';
	$default_headings_font_weight     = '';
	$default_headings_line_height     = '';
	$default_headings_font_variant    = '';

	// Defaults.
	$only_colors    = array();
	$font_size_body = array(
		'desktop'      => $default_font_size_body,
		'tablet'       => '',
		'mobile'       => '',
		'desktop-unit' => $default_font_size_body_unit,
		'tablet-unit'  => $default_font_size_body_unit,
		'mobile-unit'  => $default_font_size_body_unit,
	);

	if ( isset( $db_settings['styles']['typography']['fontSize'] ) ) {
		$body_font_size = $db_settings['styles']['typography']['fontSize'];

		$font_size_body = array(
			'desktop'      => isset( split_font_size_and_unit( $body_font_size )[0] ) ? split_font_size_and_unit( $body_font_size )[0] : $default_font_size_body,
			'desktop-unit' => isset( split_font_size_and_unit( $body_font_size )[1] ) ? split_font_size_and_unit( $body_font_size )[1] : $default_font_size_body_unit,
		);
	}

	// Body variables.
	$body_font_family     = isset( $db_settings['styles']['typography']['fontFamily'] ) ? str_replace( 'var:preset|font-family|', '', $db_settings['styles']['typography']['fontFamily'] ) : $default_body_font_family;
	$body_font_family_raw = isset( $db_settings['styles']['typography']['fontFamily'] ) ? $db_settings['styles']['typography']['fontFamily'] : $default_body_font_family_raw;
	$body_font_variant    = $default_body_font_variant;
	$body_font_weight     = isset( $db_settings['styles']['typography']['fontWeight'] ) ? $db_settings['styles']['typography']['fontWeight'] : $default_body_font_weight;
	$body_line_height     = isset( $db_settings['styles']['typography']['lineHeight'] ) ? $db_settings['styles']['typography']['lineHeight'] : $default_body_line_height;

	// Heading variable.
	/** @psalm-suppress PossiblyUndefinedStringArrayOffset */ // phpcs:ignore Generic.Commenting.DocComment.MissingShort -- Ignored as isset is already checked.
	$headings_font_family     = isset( $db_settings['styles']['elements']['heading']['typography']['fontFamily'] ) ? str_replace( 'var:preset|font-family|', '', $db_settings['styles']['elements']['heading']['typography']['fontFamily'] ) : $default_headings_font_family;
	$headings_font_family_raw = isset( $db_settings['styles']['elements']['heading']['typography']['fontFamily'] ) ? $db_settings['styles']['elements']['heading']['typography']['fontFamily'] : $default_headings_font_family_raw;
	$headings_font_weight     = isset( $db_settings['styles']['elements']['heading']['typography']['fontWeight'] ) ? $db_settings['styles']['elements']['heading']['typography']['fontWeight'] : $default_headings_font_weight;
	$headings_line_height     = isset( $db_settings['styles']['elements']['heading']['typography']['lineHeight'] ) ? $db_settings['styles']['elements']['heading']['typography']['lineHeight'] : $default_headings_line_height;
	$headings_font_variant    = $default_headings_font_variant;

	if ( $db_settings && isset( $db_settings['settings']['color']['palette']['theme'] ) ) {
		$colors = $db_settings['settings']['color']['palette']['theme'];
		foreach ( $colors as $single ) {
			$only_colors[] = $single['color'];
		}
	} else {
		if ( isset( $json_settings['settings']['color']['palette'] ) ) {
			$colors = $json_settings['settings']['color']['palette'];

			foreach ( $colors as $single ) {
				$only_colors[] = $single['color'];
			}
		}
	}

	return array(
		'global-color-palette'     => array(
			'palette' => $only_colors,
		),
		'body-font-family'         => $body_font_family,
		'body-font-family-raw'     => $body_font_family_raw,
		'body-font-variant'        => $body_font_variant,
		'body-font-weight'         => $body_font_weight,
		'font-size-body'           => $font_size_body,
		'body-line-height'         => $body_line_height,
		'headings-font-family'     => $headings_font_family,
		'headings-font-family-raw' => $headings_font_family_raw,
		'headings-font-weight'     => $headings_font_weight,
		'headings-line-height'     => $headings_line_height,
		'headings-font-variant'    => $headings_font_variant,
	);

}
