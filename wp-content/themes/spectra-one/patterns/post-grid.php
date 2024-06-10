<?php
/**
 * Title: Post grid
 * Slug: spectra-one/post-grid
 * Categories: posts
 * Keywords: post grid
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:heading {"textAlign":"left","align":"wide","textColor":"heading","className":"wp-block-heading"} -->
<h2 class="wp-block-heading alignwide has-text-align-left has-heading-color has-text-color"><?php esc_html_e( 'Latest from the blog', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:query {"queryId":42,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"height":"400px","style":{"border":{"radius":"8px"}}} /-->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-swt-post-terms-pill","fontSize":"x-small"} /-->
<!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"textColor":"heading"} /-->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author {"avatarSize":24,"showAvatar":false,"fontSize":"x-small"} /-->
<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size">·</p>
<!-- /wp:paragraph -->
<!-- wp:post-date {"format":"M j, Y","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->