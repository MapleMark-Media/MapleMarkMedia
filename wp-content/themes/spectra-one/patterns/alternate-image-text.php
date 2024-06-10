<?php
/**
 * Title: Alternate image text
 * Slug: spectra-one/alternate-image-text
 * Categories: featured
 * Keywords: alternate image text
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/content-1.png",
    $get_url . "assets/image/content-2.png",
    $get_url . "assets/image/content-3.png",
];
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","textColor":"heading","className":"wp-block-heading"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-color has-text-color"><?php esc_html_e( 'Discover a new way to build website', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Get online quickly with easy-to-use Full Site Editor builder', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:columns {"align":"wide","style":{"spacing":{}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1039,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1039" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="letter-spacing:2px"><?php esc_html_e( '01', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"textColor":"heading","className":"wp-block-heading"} -->
<h4 class="wp-block-heading has-heading-color has-text-color"><?php esc_html_e( 'Visual editing experience', 'spectra-one' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Customize the entire website layout, including the header, footer, and all other template parts. With FSE, we can create and edit templates for their entire website, including single posts, archive pages, and custom post types.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small);font-style:normal;font-weight:500"><a href="#"><?php esc_html_e( 'Learn More', 'spectra-one' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="letter-spacing:2px"><?php esc_html_e( '02', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"textColor":"heading","className":"wp-block-heading"} -->
<h4 class="wp-block-heading has-heading-color has-text-color"><?php esc_html_e( 'Innovative block patterns', 'spectra-one' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Block patterns are pre-designed block layouts that we can easily insert into their content. These patterns can help to save time and create visually appealing designs. Allows us to create custom themes using the block-based template.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small);font-style:normal;font-weight:500"><a href="#"><?php esc_html_e( 'Learn More', 'spectra-one' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1040,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-1040" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns {"align":"wide","style":{"spacing":{}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1041,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-1041" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="letter-spacing:2px"><?php esc_html_e( '03', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"textColor":"heading","className":"wp-block-heading"} -->
<h4 class="wp-block-heading has-heading-color has-text-color"><?php esc_html_e( 'Beautiful global styles', 'spectra-one' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Global styles enable us to create and apply consistent design elements across the entire website, including typography, colors, and spacing. Providing us with more control over our website\'s look and feel.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small);font-style:normal;font-weight:500"><a href="#"><?php esc_html_e( 'Learn More', 'spectra-one' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->