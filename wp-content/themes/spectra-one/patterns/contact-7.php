<?php
/**
 * Title: Teams three columns square
 * Slug: spectra-one/contact-7
 * Categories: contact
 * Keywords: teams three columns square
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/avatar-square-1.jpg",
    $get_url . "assets/image/avatar-square-2.jpg",
    $get_url . "assets/image/avatar-square-3.jpg",
];

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Meet the team', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'The talent driving our success', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"33%"}}}} -->
<p style="padding-right:33%"><?php esc_html_e( 'Meet our dedicated team of professionals who are passionate about providing top-notch service and delivering exceptional results.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":1188,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-style-default"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1188"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color"><?php esc_html_e( 'Wade Warren', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size"><?php esc_html_e( 'Creative Director', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--primary)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":1189,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-style-default"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-1189"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color"><?php esc_html_e( 'Leslie Alexander', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size"><?php esc_html_e( 'Product Manager', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--primary)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":1190,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-style-default"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-1190"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color"><?php esc_html_e( 'Esther Howard', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size"><?php esc_html_e( 'Senior Product Designer', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--primary)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->