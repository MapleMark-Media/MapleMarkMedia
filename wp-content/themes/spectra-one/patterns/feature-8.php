<?php
/**
 * Title: Image with feature list column
 * Slug: spectra-one/feature-8
 * Categories: featured
 * Keywords: Image with feature list column
 */

 $get_url = trailingslashit(get_template_directory_uri());

 $images = [
    $get_url . "assets/image/placeholder-portrait.svg",
     $get_url . "assets/image/featured-1.svg",
     $get_url . "assets/image/featured-2.svg",
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
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
<p class="has-link-color" style="margin-top:var(--wp--preset--spacing--small)"><a href="#"><?php esc_html_e( 'Learn More →', 'spectra-one' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"className":"is-style-swt-separator-wide-thin-line"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-swt-separator-wide-thin-line" style="margin-top:var(--wp--preset--spacing--large)"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--small)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":139,"width":24,"height":24,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large is-resized swt-duotone-primary"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-139" width="24" height="24"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Tailor your website to your liking with endless options.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":139,"width":24,"height":24,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large is-resized swt-duotone-primary"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-139" width="24" height="24"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Experience lightning-fast page load speeds.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":41,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-41" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->