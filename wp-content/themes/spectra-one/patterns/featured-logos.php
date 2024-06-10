<?php
/**
 * Title: Featured logos
 * Slug: spectra-one/featured-logos
 * Categories: featured
 * Keywords: featured logos
 */

 $get_url = trailingslashit(get_template_directory_uri());

 $images = [
     $get_url . "assets/image/featured-logo-1.svg",
     $get_url . "assets/image/featured-logo-2.svg",
     $get_url . "assets/image/featured-logo-3.svg",
     $get_url . "assets/image/featured-logo-4.svg",
     $get_url . "assets/image/featured-logo-5.svg",
     $get_url . "assets/image/featured-logo-6.svg"
 ];

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px","fontStyle":"normal","fontWeight":"500"}},"textColor":"heading","fontSize":"x-small"} -->
<p class="has-text-align-center has-heading-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Brought to you by the creators of', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":921,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image aligncenter size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-921"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":922,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image aligncenter size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-922"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":923,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image aligncenter size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-923"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":924,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image aligncenter size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[3] ); ?>" alt="" class="wp-image-924"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":925,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image aligncenter size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[4] ); ?>" alt="" class="wp-image-925"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":926,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image aligncenter size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[5] ); ?>" alt="" class="wp-image-926"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->