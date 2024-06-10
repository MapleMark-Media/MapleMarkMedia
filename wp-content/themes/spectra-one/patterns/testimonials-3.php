<?php
/**
 * Title: Testimonial list
 * Slug: spectra-one/testimonials-3
 * Categories: featured
 * Keywords: testimonial list
 */

 $get_url = trailingslashit(get_template_directory_uri());

 $images = [
     $get_url . "assets/image/avatar-1.png",
     $get_url . "assets/image/avatar-2.png",
     $get_url . "assets/image/avatar-3.png",
     $get_url . "assets/image/avatar-4.png",
 ];
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained","contentSize":"572px"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Testimonials', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'See what people have to say about us', 'spectra-one' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"border":{"radius":"16px","width":"1px"},"dimensions":{"minHeight":"100%"}},"borderColor":"outline","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:16px;min-height:100%;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( '★★★★★', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":6,"textColor":"heading","className":"wp-block-heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color"><?php esc_html_e( 'Highly recommended!', 'spectra-one' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'This theme made the process of building my website a breeze. The drag-and-drop interface was easy to use and the templates were customizable.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:image {"id":938,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[0]); ?>" alt="" class="wp-image-938" style="border-radius:20px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Darlene Robertson', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'Web designer', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"border":{"radius":"16px","width":"1px"},"dimensions":{"minHeight":"100%"}},"borderColor":"outline","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:16px;min-height:100%;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( '★★★★★', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":6,"textColor":"heading","className":"wp-block-heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color"><?php esc_html_e( 'Endless customization', 'spectra-one' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Endless customization options and responsive design, plus great customer support. Highly recommend!', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:image {"id":938,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[1]); ?>" alt="" class="wp-image-938" style="border-radius:20px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Jacob Jones', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'Freelancer', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"border":{"radius":"16px","width":"1px"},"dimensions":{"minHeight":"100%"}},"borderColor":"outline","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:16px;min-height:100%;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( '★★★★★', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":6,"textColor":"heading","className":"wp-block-heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color"><?php esc_html_e( 'Great on any device', 'spectra-one' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'I\'ve used a few different website builders over the years, and this one is by far the best. The responsive design ensures that my website looks great on any device.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:image {"id":938,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[2]); ?>" alt="" class="wp-image-938" style="border-radius:20px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Ralph Edwards', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'Marketing Coordinator', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->