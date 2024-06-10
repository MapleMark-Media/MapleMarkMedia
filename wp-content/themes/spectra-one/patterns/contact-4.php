<?php
/**
 * Title: Contact info card with background
 * Slug: spectra-one/contact-4
 * Categories: contact
 * Keywords: contact info card with background
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/placeholder-wide.svg",
    $get_url . "assets/image/avatar-square-3.jpg",
];

?>

<!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":1201,"dimRatio":50} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1201" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:image {"align":"center","id":1190,"width":128,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-1190" width="128"/></figure>
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
<!-- /wp:social-links -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:button {"textColor":"white","width":100,"style":{"border":{"radius":"99px"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" style="border-radius:99px"><?php esc_html_e( 'Behance', 'spectra-one' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","width":100,"style":{"border":{"radius":"99px"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" style="border-radius:99px"><?php esc_html_e( 'Dribbble', 'spectra-one' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","width":100,"style":{"border":{"radius":"99px"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" style="border-radius:99px"><?php esc_html_e( 'Linkedin', 'spectra-one' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","width":100,"style":{"border":{"radius":"99px"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" style="border-radius:99px"><?php esc_html_e( 'Github', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->