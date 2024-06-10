<?php
/**
 * Title: Header blend
 * Slug: spectra-one/header-4
 * Categories: header
 * Block Types: core/template-part/header
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/logo-white.svg",
];

?>


<!-- wp:group {"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"id":849,"sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary site-logo-img"} -->
<figure class="wp-block-image size-full swt-duotone-secondary site-logo-img"><a href="<?php echo esc_url( get_home_url() ); ?>">
<img src="<?php echo esc_url( $images[0] ); ?>" alt="home" class="wp-image-849"/>
</a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {"textColor":"heading","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"SWTHideMob":true} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"6px"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="border-radius:6px"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->