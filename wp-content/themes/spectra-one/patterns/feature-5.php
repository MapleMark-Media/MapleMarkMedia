<?php
/**
 * Title: Three column featured grid outline
 * Slug: spectra-one/feature-5
 * Categories: featured
 * Keywords: three column featured grid outline
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
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Full Site Editing', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Unleash the power of block editor', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Get online quickly with easy-to-use Full Site Editor builder', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"dimensions":{"minHeight":"100%"},"border":{"width":"1px","radius":"6px"}},"className":"has-border-color has-outline-border-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:6px;min-height:100%;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":139,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-139"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Easily Customizable', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Tailor your website to your liking with endless options to personalize the design and functionality.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"dimensions":{"minHeight":"100%"},"border":{"width":"1px","radius":"6px"}},"className":"has-border-color has-outline-border-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:6px;min-height:100%;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":139,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-139"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Blazing Fast', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Experience lightning-fast page load speeds for optimal user experience and SEO ranking.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"dimensions":{"minHeight":"100%"},"border":{"width":"1px","radius":"6px"}},"className":"has-border-color has-outline-border-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:6px;min-height:100%;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":139,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-139"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'SEO Optimized', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Built with search engines in mind, achieve higher rankings and more traffic with optimized code.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"dimensions":{"minHeight":"100%"},"border":{"width":"1px","radius":"6px"}},"className":"has-border-color has-outline-border-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:6px;min-height:100%;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":139,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[3] ); ?>" alt="" class="wp-image-139"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Drag and Drop', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Easily customize your website\'s layout and design using an intuitive, drag-and-drop interface.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"dimensions":{"minHeight":"100%"},"border":{"width":"1px","radius":"6px"}},"className":"has-border-color has-outline-border-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:6px;min-height:100%;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":139,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[4] ); ?>" alt="" class="wp-image-139"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Global Styles', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Define global styling settings for your website, such as typography, colors, and spacing.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"dimensions":{"minHeight":"100%"},"border":{"width":"1px","radius":"6px"}},"className":"has-border-color has-outline-border-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:6px;min-height:100%;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":139,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large swt-duotone-primary"><img src="<?php echo esc_url( $images[5] ); ?>" alt="" class="wp-image-139"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Design Patterns', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Spectra offers a wide selection of meticulously crafted patterns to enhance your content.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->