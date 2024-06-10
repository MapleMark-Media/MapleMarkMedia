<?php
/**
 * Title: Footer minimal menu center
 * Slug: spectra-one/footer-2
 * Categories: footer
 * Block Types: core/template-part/footer
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/logo.svg",
];

?>


<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","style":{"spacing":{}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"id":1048,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary site-logo-img"} -->
<figure class="wp-block-image size-full swt-duotone-secondary site-logo-img"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1048"/></figure>
<!-- /wp:image -->
<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{}}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->
<!-- wp:social-links {"iconColor":"heading","iconColorValue":"var(--wp--preset--color--heading)","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"twitter"} /-->
<!-- wp:social-link {"url":"#","service":"youtube"} /-->
<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php echo sprintf( __( '© %d ·', 'spectra-one' ), date_i18n("Y")); ?></p>
<!-- /wp:paragraph -->
<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php esc_html_e( 'Privacy', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php esc_html_e( '.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php esc_html_e( 'Terms', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->