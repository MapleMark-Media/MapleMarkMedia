<?php
/**
 * Title: Template single
 * Slug: spectra-one/template-single
 * Categories: pages
 * Keywords: post, single
 */
?>

<!-- wp:pattern {"slug":"spectra-one/hero-single"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:group {"className":"swt-block-featured-image","layout":{"type":"constrained"}} -->
<div class="wp-block-group swt-block-featured-image"><!-- wp:post-featured-image {"height":"432px"} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"layout":{"type":"constrained"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-large","top":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:post-terms {"term":"post_tag","className":"is-style-swt-post-terms-pill"} /-->

<!-- wp:separator {"backgroundColor":"outline","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-outline-color has-alpha-channel-opacity has-outline-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:post-author {"showBio":true,"className":"is-style-swt-post-author-simple","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"backgroundColor":"surface","className":"swt-block-comment-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group swt-block-comment-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:comments -->
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