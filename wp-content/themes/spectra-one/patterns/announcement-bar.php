<?php
/**
 * Title: Announcement bar
 * Slug: spectra-one/announcement-bar
 * Categories: header
 * Keywords: announcement bar
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-small","bottom":"var:preset|spacing|xxx-small"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-small);padding-bottom:var(--wp--preset--spacing--xxx-small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"x-small"} -->
<p class="has-text-align-center has-background-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( 'Announcement message can be here.. ', 'spectra-one' ); ?><a href="#" style="text-decoration:underline"><?php esc_html_e( 'click here', 'spectra-one' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->