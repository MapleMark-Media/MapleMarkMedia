<?php
/**
 * Theme Helpers
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

/**
 * Get template Directory Uri
 *
 * @since 0.0.1
 *
 * @param string $path Optional path.
 *
 * @return string
 */
function get_uri( string $path = '' ): string {
	return trailingslashit( esc_url( get_template_directory_uri() . SWT_DS ) . $path );
}


/**
 * Is spectra plugin is enabled / available
 *
 * @since 0.0.3
 * @return bool
 */
function is_spectra_plugin(): bool {
	return defined( 'UAGB_VER' ) ? true : false;
}

/**
 * Is custom font plugin is enabled / available
 *
 * @since 1.0.5
 * @return bool
 */
function is_custom_fonts_plugin(): bool {
	return defined( 'BSF_CUSTOM_FONTS_VER' ) ? true : false;
}

/**
 * RTL For Dynamic / Inline css
 *
 * @since 0.0.1
 *
 * @param string $direction Left or Right Direction.
 *
 * @return string
 */
function rtl_css( string $direction = '' ): string {
	$is_site_rtl = is_rtl() ? true : false;
	if ( 'left' === $direction ) {
		return $is_site_rtl ? esc_attr( 'right' ) : esc_attr( 'left' );
	} else {
		return $is_site_rtl ? esc_attr( 'left' ) : esc_attr( 'right' );
	}
}

/**
 * Parse CSS
 *
 * @param  array $css_output Array of CSS.
 * @param  mixed $min_media  Min Media breakpoint.
 * @param  mixed $max_media  Max Media breakpoint.
 * @return string             Generated CSS.
 */
function parse_css( array $css_output = array(), $min_media = '', $max_media = '' ): string {

	$parse_css = '';
	if ( count( $css_output ) > 0 ) {

		foreach ( $css_output as $selector => $properties ) {

			if ( null === $properties ) {
				break;
			}

			if ( ! count( $properties ) ) {
				continue;
			}

			$temp_parse_css   = $selector . '{';
			$properties_added = 0;

			foreach ( $properties as $property => $value ) {

				if ( '' == $value && 0 !== $value ) {
					continue;
				}

				$properties_added++;
				$temp_parse_css .= $property . ':' . $value . ';';
			}

			$temp_parse_css .= '}';

			if ( $properties_added > 0 ) {
				$parse_css .= $temp_parse_css;
			}
		}

		if ( '' != $parse_css && ( '' !== $min_media || '' !== $max_media ) ) {

			$media_css       = '@media ';
			$min_media_css   = '';
			$max_media_css   = '';
			$media_separator = '';

			if ( '' !== $min_media ) {
				$min_media_css = '(min-width:' . $min_media . 'px)';
			}
			if ( '' !== $max_media ) {
				$max_media_css = '(max-width:' . $max_media . 'px)';
			}
			if ( '' !== $min_media && '' !== $max_media ) {
				$media_separator = ' and ';
			}

			$media_css .= $min_media_css . $media_separator . $max_media_css . '{' . $parse_css . '}';

			return $media_css;
		}
	}

	return $parse_css;
}

/**
 * Render Image Placeholder
 *
 * @since 0.0.1
 *
 * @param string $html Html.
 * @param array  $block Block array.
 *
 * @return string
 */
function render_image_placeholder( string $html, array $block ): string {
	$dom    = dom( $html );
	$figure = get_dom_element( 'figure', $dom );
	$img    = get_dom_element( 'img', $figure );

	if ( $img && $img->getAttribute( 'src' ) ) {
		return $html;
	}

	$url_rel    = ( isset( $block['linkTarget'] ) && $block['linkTarget'] ) ? 'target="' . $block['linkTarget'] . '"' : '';
	$url_target = ( isset( $block['rel'] ) && $block['rel'] ) ? 'rel="' . $block['rel'] . '"' : '';

	/** @psalm-suppress PossiblyFalseOperand */ // phpcs:ignore PossiblyFalseArgument, Generic.Commenting.DocComment.MissingShort
	$default_placeholder = ( isset( $block['isLink'] ) && true === $block['isLink'] ) ? '<a href="' . get_the_permalink() . '" ' . $url_rel . ' ' . $url_target . ' ><figure class="wp-block-image"><img src="" alt=""/></figure></a>' : '<figure class="wp-block-image"><img src="" alt=""/></figure>';
	$html                = ! $html ? $default_placeholder : $html;
	$dom                 = dom( $html );
	$svg                 = get_svg_icon( 'placeholder', 30 );
	$svg_dom             = dom( $svg );
	$svg_element         = get_dom_element( 'svg', $svg_dom );

	if ( ! $svg_element ) {
		return $html;
	}

	$svg_classes = explode( ' ', $svg_element->getAttribute( 'class' ) );

	$svg_classes[] = 'wp-block-image__placeholder-icon';

	$svg_element->setAttribute( 'class', implode( ' ', $svg_classes ) );

	$svg_element->setAttribute( 'fill', 'currentColor' );

	$result = $dom->importNode( $svg_element, true );
	$figure = get_dom_element( 'figure', $dom );

	if ( ! $figure ) {
		return $html;
	}

	$img = get_dom_element( 'img', $figure );

	if ( $img ) {
		$figure->removeChild( $img );
	}

	$figure->appendChild( $result );
	$classes = explode( ' ', $figure->getAttribute( 'class' ) );

	if ( ! in_array( 'is-placeholder', $classes, true ) ) {
		$classes[] = 'is-placeholder';
	}

	if ( isset( $block['align'] ) && $block['align'] ) {
		$classes[] = 'align' . $block['align'];
	}

	$figure->setAttribute( 'class', implode( ' ', $classes ) );

	$styles = array(
		'width'                      => $block['width'] ?? null,
		'height'                     => $block['height'] ?? null,
		'margin-top'                 => $block['style']['spacing']['margin']['top'] ?? null,
		'margin-right'               => isset( $block['style'] ) ? ( $block['style']['spacing']['margin']['right'] ?? null ) : null,
		'margin-bottom'              => isset( $block['style'] ) ? ( $block['style']['spacing']['margin']['bottom'] ?? null ) : null,
		'margin-left'                => isset( $block['style'] ) ? ( $block['style']['spacing']['margin']['left'] ?? null ) : null,
		'border-top-left-radius'     => isset( $block['style'] ) ? ( $block['style']['border']['radius']['topLeft'] ?? null ) : null,
		'border-top-right-radius'    => isset( $block['style'] ) ? ( $block['style']['border']['radius']['topRight'] ?? null ) : null,
		'border-bottom-left-radius'  => isset( $block['style'] ) ? ( $block['style']['border']['radius']['bottomLeft'] ?? null ) : null,
		'border-bottom-right-radius' => isset( $block['style'] ) ? ( $block['style']['border']['radius']['bottomRight'] ?? null ) : null,
	);

	$figure->setAttribute(
		'style',
		css_array_to_string(
			array_merge(
				css_string_to_array( $figure->getAttribute( 'style' ) ),
				$styles,
			)
		)
	);

	return $dom->saveHTML();
}

/**
 * Get SVG icon
 *
 * @since 0.0.1
 *
 * @param string   $slug Icon name.
 * @param int|null $size Icon size.
 *
 * @return string
 */
function get_svg_icon( string $slug, int $size = null ): string {
	ob_start();
	echo file_get_contents( SWT_DIR . 'assets/svg/svgs.json' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Required to get svg.json.
	$icon_set = json_decode( ob_get_clean(), true );

	$icon = isset( $icon_set[ $slug ] ) ? $icon_set[ $slug ] : '';

	if ( ! $icon ) {
		return '';
	}

	$dom = dom( $icon );
	$svg = get_dom_element( 'svg', $dom );

	if ( ! $svg ) {
		return '';
	}

	$unique_id = 'icon-' . uniqid();

	$svg->setAttribute( 'role', 'img' );
	$svg->setAttribute( 'aria-labelledby', $unique_id );
	$svg->setAttribute( 'data-icon', $slug );

	$label = ucwords( str_replace( '-', ' ', $slug ) ) . __( ' Icon', 'spectra-one' );
	$title = $dom->createElement( 'title' );

	$title->appendChild( $dom->createTextNode( $label ) );
	$title->setAttribute( 'id', $unique_id );

	$svg->insertBefore( $title, $svg->firstChild ); // phpcs:ignore WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase -- Required to access dom element.

	if ( $size ) {
		$svg->setAttribute( 'width', (string) $size );
		$svg->setAttribute( 'height', (string) $size );
	}

	return $dom->saveHTML();
}


/**
 * Converts css array to string.
 *
 * @since 0.0.1
 *
 * @param array $styles Styles array.
 * @param bool  $trim  trim trailing semicolon.
 *
 * @return string
 */
function css_array_to_string( array $styles, bool $trim = false ): string {
	$css = '';

	foreach ( $styles as $property => $value ) {
		if ( is_null( $value ) ) {
			continue;
		}

		$semicolon = $trim && array_key_last( $styles ) === $property ? '' : ';';
		$css      .= $property . ':' . $value . $semicolon;
	}

	return $css;
}

/**
 * Converts string of CSS rules to an array.
 *
 * @since 0.0.1
 *
 * @param string $css CSS string.
 *
 * @return array
 */
function css_string_to_array( string $css ): array {
	$array = array();

	$css = str_replace( 'xml;', 'xml$', $css );

	$elements = explode( ';', $css );

	foreach ( $elements as $element ) {
		$parts = explode( ':', $element, 2 );

		if ( isset( $parts[1] ) ) {
			$property = $parts[0];
			$value    = $parts[1];

			if ( '' !== $value && 'null' !== $value ) {
				$array[ $property ] = str_replace( 'xml$', 'xml;', $value );
			}
		}
	}

	return $array;
}




/**
 * Check if page title is enabled or disabled.
 *
 * @since 1.0.0
 * @param int $post_id Post id.
 * @return bool
 */
function is_page_title( int $post_id = 0 ): bool {
	$get_check_title = get_post_meta( $post_id, '_swt_meta_site_title_display', true );
	$check_meta      = $get_check_title ? true : false;
	return is_singular() && boolval( $check_meta );
}


/**
 * Get an SVG Icon
 *
 * @since 1.0.2
 * @param string $icon the icon name.
 * @param string $class extra classes.
 * @param bool   $base if the baseline class should be added.
 * @return string
 */
function fetch_svg_icon( string $icon = '', string $class = '', bool $base = true ) :string {
	$swt_svgs = null;
	$output   = '<span class="swt-svg' . ( $base ? ' svg-baseline' : '' ) . ( $class ? ' ' . $class : '' ) . '">';

	ob_start();
	echo file_get_contents( SWT_DIR . 'assets/svg/svgs.json' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Required to get svg.json.
	$swt_svgs = json_decode( ob_get_clean(), true );
	$swt_svgs = apply_filters( 'swt_svg_icons', $swt_svgs );

	$output .= isset( $swt_svgs[ $icon ] ) ? $swt_svgs[ $icon ] : '';

	$output .= '</span>';

	return $output;
}

/**
 * Check the WordPress version.
 *
 * @since  1.0.4
 * @param string $version   WordPress version to compare with the current version.
 * @param mixed  $compare   Comparison value i.e > or < etc.
 * @return bool|null            True/False based on the  $version and $compare value.
 */
function wp_version_compare( $version, $compare ) {
	global $wp_version;
	list( $current_version ) = explode( '-', $wp_version );
	return version_compare( $current_version, $version, $compare );
}

/**
 * Whether or not enable the default paddings which was before v1.1.1
 *
 * @return bool
 * @since x.x.x
 */
function enable_default_spacing_paddings() {
	$swt_theme_options = get_option( 'swt_theme_options', array() );
	return apply_filters( 'swt_enable_default_spacing_paddings', isset( $swt_theme_options['enable_default_spacing_paddings'] ) );
}
