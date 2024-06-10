<?php
/**
 * Title: Footer six columns menu separated
 * Slug: spectra-one/footer-5
 * Categories: footer
 * Block Types: core/template-part/footer
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/logo.svg",
];

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1048,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}},"className":"swt-duotone-secondary site-logo-img"} -->
<figure class="wp-block-image size-full swt-duotone-secondary site-logo-img"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1048"/></figure>
<!-- /wp:image -->
<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{}}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group -->
<!-- wp:social-links {"iconColor":"heading","iconColorValue":"var(--wp--preset--color--heading)","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"twitter"} /-->
<!-- wp:social-link {"url":"#","service":"youtube"} /-->
<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->
<!-- wp:separator {"align":"wide","backgroundColor":"outline","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-outline-color has-alpha-channel-opacity has-outline-background-color has-background is-style-wide"/>
<!-- /wp:separator -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:column {"width":"","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xx-small"}}}} -->
<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--xx-small)"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"style":{"spacing":{}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontStyle":"normal","fontWeight":"500"}},"textColor":"heading","fontSize":"x-small"} -->
<p class="has-heading-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Products', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Products List', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Plans \u0026amp; Pricing', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Partners', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontStyle":"normal","fontWeight":"500"}},"textColor":"heading","fontSize":"x-small"} -->
<p class="has-heading-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Company', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About Us', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'News', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact Us', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Meet Our Team', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xx-small"}}}} -->
<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--xx-small)"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"style":{"spacing":{}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontStyle":"normal","fontWeight":"500"}},"textColor":"heading","fontSize":"x-small"} -->
<p class="has-heading-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Support', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Gallery', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog Articles', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Brand Assets', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Brand Guidelines', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontStyle":"normal","fontWeight":"500"}},"textColor":"heading","fontSize":"x-small"} -->
<p class="has-heading-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Resources', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Knowledge Base', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact Support', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy Policy', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'TOS', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xx-small"}}}} -->
<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--xx-small)"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"style":{"spacing":{}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontStyle":"normal","fontWeight":"500"}},"textColor":"heading","fontSize":"x-small"} -->
<p class="has-heading-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Need Help?', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'What’s New', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'How to Videos', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Ask the Community', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Learn More', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontStyle":"normal","fontWeight":"500"}},"textColor":"heading","fontSize":"x-small"} -->
<p class="has-heading-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Get in touch', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Book A Meeting', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Get Quote', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Ask Product Details', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Service Inquiry', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php echo sprintf( __( '© %d ·', 'spectra-one' ), date_i18n("Y")); ?></p>
<!-- /wp:paragraph -->
<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} /-->
<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size">·<?php esc_html_e( '· All rights reserved', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php esc_html_e( 'Privacy Policy', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php esc_html_e( '·', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php esc_html_e( 'Terms and Conditions', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->