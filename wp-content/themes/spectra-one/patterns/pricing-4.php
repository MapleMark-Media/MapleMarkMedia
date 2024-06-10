<?php
/**
 * Title: Pricing three column
 * Slug: spectra-one/pricing-4
 * Categories: pricing
 * Keywords: pricing three column
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/circle-check.svg"
];

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Pricing', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","textColor":"heading","className":"wp-block-heading"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-color has-text-color"><?php esc_html_e( 'Pricing tailored to your needs', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Select your favorite plan and start your online store today!', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"borderColor":"outline","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e( 'Starter Plan', 'spectra-one' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"neutral","fontSize":"x-small"} -->
<p class="has-neutral-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Everything you need to get start building your website.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( '$9.99', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( '/ month', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color wp-element-button"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Customization options', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Essential pattern library', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Handcrafted theme styles', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Unmatched performance', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"8px","width":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"borderColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-primary-border-color" style="border-width:2px;border-radius:8px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e( 'Pro Plan', 'spectra-one' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'Unlock the full potential of your website with our Pro plan.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( '$19.99', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( '/ month', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-full swt-duotone-primary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Everything in Starter Plan plus...', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-full swt-duotone-primary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Custom typography', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-full swt-duotone-primary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Premium pattern library', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-full swt-duotone-primary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Pro blocks access', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-full swt-duotone-primary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Priority customer support', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"borderColor":"outline","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e( 'Growth Plan', 'spectra-one' ); ?></h6>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'Everything you need to get start building your website.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( '$29.99', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( '/ month', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color wp-element-button"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:group {"style":{"spacing":{}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Everything in Pro Plan plus...', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( '5 Team members license', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Premium starter templates', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":1.3}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="line-height:1.3"><!-- wp:image {"id":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary"} -->
<figure class="wp-block-image size-full swt-duotone-secondary"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-59"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"94%"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Premium support', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->