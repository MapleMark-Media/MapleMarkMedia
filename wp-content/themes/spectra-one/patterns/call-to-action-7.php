<?php
/**
 * Title: Right text with image
 * Slug: spectra-one/call-to-action-7
 * Categories: call-to-action
 * Keywords: right text with image
 */


$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/placeholder-portrait.svg",
];

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"heading","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-heading-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"id":86,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-86" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} -->
<p class="has-background-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Full Site Editing', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"background","className":"wp-block-heading"} -->
<h2 class="wp-block-heading has-background-color has-text-color"><?php esc_html_e( 'Everything you need to create amazing websites', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"background"} -->
<p class="has-background-color has-text-color"><?php esc_html_e( 'Interactive design tools and its many customization options to customize anything and everything needed to build the fully-functional website of your dreams.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)"><!-- wp:button {"className":"is-style-swt-button-secondary"} -->
<div class="wp-block-button is-style-swt-button-secondary"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Install Spectra Theme', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->