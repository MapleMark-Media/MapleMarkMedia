<?php
namespace ExtendBuilder;

add_shortcode( 'colibri_video_player', function ( $atts ) {
	ob_start();
	if ( key_exists( 'type', $atts ) && $atts['type'] === 'external' ) {
		colibri_html_embed_iframe( $atts['url'], $atts['autoplay'] );
	} else {
		colibri_html_embed_video( $atts['url'], $atts['attributes'] );
	}
	$content = ob_get_clean();

	return $content;
} );

function colibri_html_embed_iframe($url,$autoplay){
    echo "<iframe src=".esc_url($url)." class='h-video-main'".(($autoplay === 'true') ? 'allow="autoplay"' : '')."  allowfullscreen></iframe>";
}

function colibri_html_embed_video( $url, $attributes ) {
	$attrs          = explode( " ", $attributes );
	$filtered_attrs = array_filter( $attrs, function ( $attr ) {
		if ( ! str_contains( $attr, "=" ) ) {
			return true;
		}

		[ $name, $value ] = explode( "=", $attr );
		if ( str_starts_with( $name, 'on' ) || preg_match( '/\(|\)/', $value ) ) {
			return false;
		}

		return true;
	} );


	echo "<video class='h-video-main' " . esc_attr( implode( " ", $filtered_attrs ) ) . " ><source src=" . esc_url( $url ) . " type='video/mp4' /></video>";
}


