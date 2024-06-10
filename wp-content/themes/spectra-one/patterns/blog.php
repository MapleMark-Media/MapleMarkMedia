<?php
/**
 * Title: Blog grid
 * Slug: spectra-one/blog-grid
 * Categories: posts
 * Keywords: blog grid
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"
    style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:heading {"level":1,"align":"wide"} -->
    <h1 class="alignwide"><?php esc_html_e( 'Latest Posts', 'spectra-one' ); ?></h1>
    <!-- /wp:heading -->
    <!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide"} -->
        <!-- wp:post-featured-image {"isLink":true,"height":"400px","style":{"border":{"radius":"8px"}}} /-->
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|xx-small"},"margin":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group"
            style="margin-bottom:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--xx-small)">
            <!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-swt-post-terms-pill"} /-->
            <!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}},"textColor":"heading"} /-->
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"textColor":"neutral","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-neutral-color has-text-color">
                <!-- wp:post-author {"avatarSize":24,"showAvatar":false} /-->
                <!-- wp:paragraph {"fontSize":"x-small"} -->
                <p class="has-x-small-font-size">·</p>
                <!-- /wp:paragraph -->
                <!-- wp:post-date {"format":"M j, Y"} /-->
            </div>
            <!-- /wp:group -->
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