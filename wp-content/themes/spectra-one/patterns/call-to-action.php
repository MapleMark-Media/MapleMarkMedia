<?php
/**
 * Title: Wide banner with button
 * Slug: spectra-one/call-to-action
 * Categories: call-to-action
 * Keywords: wide banner with button
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"color":{"gradient":"var(--wp--preset--gradient--primary)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background:var(--wp--preset--gradient--primary);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"letterSpacing":"-1px"}},"textColor":"white","className":"wp-block-heading"} -->
<h3 class="wp-block-heading has-text-align-left has-white-color has-text-color" style="letter-spacing:-1px"><?php esc_html_e( 'Build your own website', 'spectra-one' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}},"textColor":"white"} -->
<p class="has-text-align-left has-white-color has-text-color" style="margin-top:var(--wp--preset--spacing--xx-small)"><?php esc_html_e( 'Take your website to the next level!', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"className":"swt-responsive-position-left","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons swt-responsive-position-left"><!-- wp:button {"backgroundColor":"white","textColor":"black"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->