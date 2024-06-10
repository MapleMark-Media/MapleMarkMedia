<?php
/**
 * Title: Template search
 * Slug: spectra-one/template-search
 * Categories: template
 * Inserter: false
 */
?>


<!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"foreground","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide has-foreground-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:query-title {"type":"search","textAlign":"center","align":"wide","textColor":"white"} /--></main>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Try another search?', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"<?php esc_html_e( 'Search', 'spectra-one' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search...', 'spectra-one' ); ?>","width":null,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","className":"is-style-swt-search-minimal"} /--></div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->

<!-- wp:post-template {"align":"wide"} -->
<!-- wp:post-featured-image {"isLink":true,"height":"400px","style":{"border":{"radius":"8px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|xx-small"},"margin":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--xx-small)"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-swt-post-terms-pill","fontSize":"x-small"} /-->

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

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->