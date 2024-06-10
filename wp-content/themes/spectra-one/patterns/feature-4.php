<?php
/**
 * Title: Three column featured grid
 * Slug: spectra-one/feature-4
 * Categories: featured
 * Keywords: three column featured grid
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/featured-1.svg",
    $get_url . "assets/image/featured-2.svg",
    $get_url . "assets/image/featured-3.svg",
    $get_url . "assets/image/featured-4.svg",
    $get_url . "assets/image/featured-5.svg",
    $get_url . "assets/image/featured-6.svg",
];

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Full Site Editing', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Unleash the power of block editor', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Get online quickly with easy-to-use Full Site Editor builder', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
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
<div class="wp-block-column"><!-- wp:image {"id":139,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-139"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Blazing Fast', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Experience lightning-fast page load speeds for optimal user experience and SEO ranking.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":866,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-866"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'SEO Optimized', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Built with search engines in mind, achieve higher rankings and more traffic with optimized code.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":139,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[3] ); ?>" alt="" class="wp-image-139"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Drag and Drop', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Easily customize your website\'s layout and design using an intuitive, drag-and-drop interface.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":139,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[4] ); ?>" alt="" class="wp-image-139"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Global Styles', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Define global styling settings for your website, such as typography, colors, and spacing.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":866,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[5] ); ?>" alt="" class="wp-image-866"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Design Patterns', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Spectra offers a wide selection of meticulously crafted patterns to enhance your content.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->