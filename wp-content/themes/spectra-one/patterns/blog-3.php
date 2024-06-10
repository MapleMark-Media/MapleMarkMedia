<?php
/**
 * Title: Blog classic
 * Slug: spectra-one/blog-3
 * Categories: posts
 * Keywords: blog classic
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:heading {"textAlign":"center","level":1,"className":"wp-block-heading"} -->
    <h1 class="has-text-align-center wp-block-heading"><?php esc_html_e( 'Latest Posts', 'spectra-one' ); ?></h1>
    <!-- /wp:heading -->
    <!-- wp:query {"queryId":5,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"type":"constrained"}} -->
    <div class="wp-block-query">
        <!-- wp:post-template -->
        <!-- wp:post-featured-image {"isLink":true,"height":"400px","style":{"border":{"radius":"8px"}}} /-->
        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|large","top":"var:preset|spacing|xx-small"},"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"
            style="padding-top:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--large)">
            <!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-swt-post-terms-pill"} /-->
            <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} /-->
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"textColor":"neutral","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-neutral-color has-text-color">
                <!-- wp:post-author {"showAvatar":false,"showBio":false} /-->
                <!-- wp:paragraph {"fontSize":"x-small"} -->
                <p class="has-x-small-font-size">·</p>
                <!-- /wp:paragraph -->
                <!-- wp:post-date {"format":"M j, Y"} /-->
            </div>
            <!-- /wp:group -->
            <!-- wp:post-excerpt {"moreText":"<?php esc_html_e( 'Read More', 'spectra-one' ); ?>"} /-->
            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"backgroundColor":"outline","className":"is-style-wide"} -->
            <hr class="wp-block-separator has-text-color has-outline-color has-alpha-channel-opacity has-outline-background-color has-background is-style-wide"
                style="margin-top:var(--wp--preset--spacing--large)" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
        <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
        <!-- wp:query-pagination-previous /-->
        <!-- wp:query-pagination-numbers /-->
        <!-- wp:query-pagination-next /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->