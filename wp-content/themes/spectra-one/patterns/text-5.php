<?php
/**
 * Title: text with download
 * Slug: spectra-one/text-5
 * Categories: call-to-action
 * Keywords: text with download
 */


$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/placeholder-portrait.svg",
];

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-large","left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Full Site Editing', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"wp-block-heading"} -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Unleash the power of block editor', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Customize the entire website layout, including the header, footer, and all other template parts. With FSE, we can create and edit templates for their entire website, including single posts, archive pages, and custom post types.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"width":"1px","radius":"6px"}},"borderColor":"outline","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-outline-border-color has-surface-background-color has-background" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e( 'Download Spectra Theme', 'spectra-one' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}},"textColor":"body","fontSize":"x-small"} -->
<p class="has-body-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--xx-small)"><?php esc_html_e( 'Version 1.0.0', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"backgroundColor":"outline","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-outline-color has-alpha-channel-opacity has-outline-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Interactive design tools and its many customization options to customize anything and everything needed to build the fully-functional website of your dreams.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Download Now', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->