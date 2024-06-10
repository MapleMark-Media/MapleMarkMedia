<?php
/**
 * Title: Template page
 * Slug: spectra-one/template-page
 * Categories: pages
 * Keywords: page
 */
?>

<!-- wp:pattern {"slug":"spectra-one/hero-page"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"swt-block-featured-image","layout":{"type":"constrained"}} -->
<div class="wp-block-group swt-block-featured-image"><!-- wp:post-featured-image {"height":"432px"} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"align":"wide","layout":{"type":"constrained"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"margin":{"top":"var:preset|spacing|x-large"}}},"backgroundColor":"surface","className":"swt-block-comment-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group swt-block-comment-group has-surface-background-color has-background" style="margin-top:var(--wp--preset--spacing--x-large);padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}},"border":{"top":{"width":"1px","color":"var:preset|color|outline"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--outline);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":32,"style":{"border":{"radius":"20px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:comment-date {"format":"M j, Y","isLink":false,"textColor":"neutral","fontSize":"x-small"} /-->

<!-- wp:comment-edit-link {"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->