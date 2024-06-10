<?php
/**
 * Title: Three column featured
 * Slug: spectra-one/three-column-featured
 * Categories: featured
 * Keywords: three column featured
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/featured-1.svg",
    $get_url . "assets/image/featured-2.svg",
    $get_url . "assets/image/featured-3.svg",
];

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":139,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-139"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Easily Customizable', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Tailor your website to your liking with endless options to personalize the design and functionality.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":866,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-866"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Blazing Fast', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Experience lightning-fast page load speeds for optimal user experience and SEO ranking.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":867,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-867"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'SEO Optimized', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Built with search engines in mind, achieve higher rankings and more traffic with optimized code.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->