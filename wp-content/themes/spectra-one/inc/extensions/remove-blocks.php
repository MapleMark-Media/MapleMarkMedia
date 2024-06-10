<?php
/**
 * Remove blocks functions
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 1.0.0
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'render_block', SWT_NS . 'render_remove_blocks', 10, 2 );

/**
 *  Render function.
 *
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function render_remove_blocks( string $block_content, array $block ):string {
	$post_id = get_the_ID();

	// condition for page and post title.
	/** @psalm-suppress UndefinedFunction */ // phpcs:ignore PossiblyFalseArgument, Generic.Commenting.DocComment.MissingShort -- Function exist in helpers.php
	if ( $post_id && is_page_title( $post_id ) && isset( $block['attrs']['className'] ) && ( 'swt-block-page-banner-group' === $block['attrs']['className'] || 'swt-block-post-banner-group' === $block['attrs']['className'] || 'swt-block-post-title' === $block['attrs']['className'] || 'swt-block-page-title' === $block['attrs']['className'] ) ) {
		return '';
	}

	// condition for page and post featured image.
	/** @psalm-suppress UndefinedFunction */ // phpcs:ignore PossiblyFalseArgument, Generic.Commenting.DocComment.MissingShort -- Function exist in helpers.php
	if ( $post_id && ! has_post_thumbnail( $post_id ) && isset( $block['attrs']['className'] ) && 'swt-block-featured-image' === $block['attrs']['className'] ) {
		return '';
	}

	// condition for page and post comments.
	if ( ! comments_open() && isset( $block['attrs']['className'] ) && 'swt-block-comment-group' === $block['attrs']['className'] ) {
		return '';
	}

	return $block_content;
}
