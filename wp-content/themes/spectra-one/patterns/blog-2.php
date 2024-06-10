<?php
/**
 * Title: Blog simple
 * Slug: spectra-one/blog-2
 * Categories: posts
 * Keywords: blog simple
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"
    style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:heading {"textAlign":"left","level":1,"align":"wide","className":"wp-block-heading"} -->
    <h1 class="alignwide has-text-align-left wp-block-heading"><?php esc_html_e( 'Latest Posts', 'spectra-one' ); ?></h1>
    <!-- /wp:heading -->
    <!-- wp:query {"queryId":15,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide"} -->
        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
        <div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--medium)">
            <!-- wp:column {"verticalAlignment":"center","width":"75%","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%">
                <!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-swt-post-terms-pill"} /-->
                <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} /-->
                <!-- wp:post-excerpt {"moreText":""} /-->
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"textColor":"neutral","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group has-neutral-color has-text-color">
                    <!-- wp:post-author {"showAvatar":false,"showBio":false} /-->
                    <!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size">·</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:post-date {"format":"M j, Y"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
                <!-- wp:post-featured-image {"isLink":true,"height":"224px","style":{"border":{"radius":"8px"}}} /-->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"backgroundColor":"outline","className":"is-style-wide"} -->
        <hr class="wp-block-separator has-text-color has-outline-color has-alpha-channel-opacity has-outline-background-color has-background is-style-wide"
            style="margin-bottom:var(--wp--preset--spacing--medium)" />
        <!-- /wp:separator -->
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