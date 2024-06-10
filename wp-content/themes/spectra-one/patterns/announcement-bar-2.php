<?php
/**
 * Title: Announcement bar with social
 * Slug: spectra-one/announcement-bar-2
 * Categories: header
 * Keywords: announcement bar with social
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-small","bottom":"var:preset|spacing|xxx-small"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-small);padding-bottom:var(--wp--preset--spacing--xxx-small)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-small","left":"var:preset|spacing|xx-small"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"textColor":"background","className":"swt-text-align-center","fontSize":"x-small"} -->
<p class="swt-text-align-center has-background-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Announcement message can be here..', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:social-links {"iconColor":"background","iconColorValue":"var(--wp--preset--color--background)","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only swt-responsive-position-center","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only swt-responsive-position-center"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->