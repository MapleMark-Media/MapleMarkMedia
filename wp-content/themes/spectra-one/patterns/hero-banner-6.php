<?php

/**
 * Title: Hero banner with background
 * Slug: spectra-one/hero-banner-6
 * Categories: featured
 * Keywords: hero Banner with background
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/placeholder-wide.svg"
];
?>

<!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":1163,"dimRatio":50,"minHeight":80,"minHeightUnit":"vh","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1163" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"white","fontSize":"x-small"} -->
<p class="has-text-align-center has-white-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Full Site Editing', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-1px"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"textColor":"white","className":"wp-block-heading"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="margin-top:var(--wp--preset--spacing--x-small);letter-spacing:-1px"><?php esc_html_e( 'Launch Your Website Today!', 'spectra-one' ); ?></h1>
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
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->