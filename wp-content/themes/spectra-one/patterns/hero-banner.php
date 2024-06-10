<?php

/**
 * Title: Hero banner
 * Slug: spectra-one/hero-banner
 * Categories: featured
 * Keywords: hero Banner
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/hero-img.png"
];
?>

<!-- wp:group {"align":"wide","style":{"color":{"gradient":"var(--wp--preset--gradient--primary)"},"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-background" style="background:var(--wp--preset--gradient--primary);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-1px"},"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"textColor":"white","className":"wp-block-heading"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="margin-top:var(--wp--preset--spacing--large);letter-spacing:-1px"><?php esc_html_e( 'Launch Your Website Today!', 'spectra-one' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color"><?php esc_html_e( 'Create a functional and visually appealing website', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|large"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:button {"className":"is-style-swt-button-inverse"} -->
<div class="wp-block-button is-style-swt-button-inverse"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button"><?php esc_html_e( 'Learn More', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:image {"align":"center","id":1033,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1033"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->