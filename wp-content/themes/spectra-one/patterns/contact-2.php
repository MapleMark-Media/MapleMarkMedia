<?php
/**
 * Title: Contact info card
 * Slug: spectra-one/contact-2
 * Categories: contact
 * Keywords: contact info card
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/avatar-square-3.jpg",
];

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"border":{"radius":"8px","width":"1px"}},"borderColor":"outline","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:8px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"0px","bottomRight":"0px"}}},"gradient":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-gradient-background has-background" style="border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
<!-- wp:image {"align":"center","id":1190,"width":128,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded">
<img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1190" width="128"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":5,"textColor":"white","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-center has-white-color has-text-color"><?php esc_html_e( 'Esther Howard', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"x-small"} -->
<p class="has-text-align-center has-white-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Senior Product Designer at Spectra', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"border":{"radius":"99px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" style="border-radius:99px"><?php esc_html_e( 'Behance', 'spectra-one' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"style":{"border":{"radius":"99px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" style="border-radius:99px"><?php esc_html_e( 'Dribbble', 'spectra-one' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"style":{"border":{"radius":"99px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" style="border-radius:99px"><?php esc_html_e( 'Linkedin', 'spectra-one' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"style":{"border":{"radius":"99px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" style="border-radius:99px"><?php esc_html_e( 'Github', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->