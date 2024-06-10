<?php
/**
 * Title: Split image right
 * Slug: spectra-one/split-image-right
 * Categories: featured
 * Keywords: split image right
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/split-content.png",
];
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"wp-block-heading"} -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Everything you need to create amazing websites', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Interactive design tools and its many customization options to customize anything and everything needed to build the fully-functional website of your dreams.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn More', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1042,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1042" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->