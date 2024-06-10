<?php

/**
 * Title: Wide Hero banner with background
 * Slug: spectra-one/call-to-action-10
 * Categories: call-to-action
 * Keywords: wide Hero banner with background
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/placeholder-wide.svg"
];
?>

<!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":1163,"dimRatio":50,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1163" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-1px"}},"textColor":"white","className":"wp-block-heading","fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-xxx-large-font-size" style="letter-spacing:-1px"><?php esc_html_e( 'Everything you need to create amazing websites', 'spectra-one' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color"><?php esc_html_e( 'Interactive design tools and its many customization options to customize anything and everything needed to build the fully-functional website of your dreams.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:button {"className":"is-style-swt-button-inverse"} -->
<div class="wp-block-button is-style-swt-button-inverse"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button"><?php esc_html_e( 'Learn More', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->