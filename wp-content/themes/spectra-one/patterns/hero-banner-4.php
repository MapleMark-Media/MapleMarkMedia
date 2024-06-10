<?php

/**
 * Title: Hero banner two column blend
 * Slug: spectra-one/hero-banner-4
 * Categories: featured
 * Keywords: hero banner two column blend
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/hero-img.png"
];
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-large","left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-1px"}},"className":"wp-block-heading"} -->
<h1 class="wp-block-heading" style="letter-spacing:-1px"><?php esc_html_e( 'Launch Your Website Today!', 'spectra-one' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Create a functional and visually appealing website', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"textColor":"primary","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color wp-element-button"><?php esc_html_e( 'Learn More', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":1157,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1157"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->