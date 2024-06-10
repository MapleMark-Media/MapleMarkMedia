<?php
/**
 * Title: Wide banner with button center
 * Slug: spectra-one/wide-banner-with-button
 * Categories: call-to-action
 * Keywords: wide banner with button center
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}},"color":{"gradient":"var(--wp--preset--gradient--primary)"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background" style="background:var(--wp--preset--gradient--primary);padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"-1px"}},"textColor":"white","className":"wp-block-heading"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="letter-spacing:-1px"><?php esc_html_e( 'Build your own website', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color"><?php esc_html_e( 'Take your website to the next level!', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-swt-button-inverse"} -->
<div class="wp-block-button is-style-swt-button-inverse"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->