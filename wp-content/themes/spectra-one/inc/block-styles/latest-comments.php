<?php
/**
 * Register latest comments styles.
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 1.0.0
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$swt_parent_class = '.is-style-' . SWT_PFX . '-latest-comments-simple';

register_block_style(
	'core/latest-comments',
	array(
		'name'         => SWT_PFX . '-latest-comments-simple',
		'label'        => __( 'Simple', 'spectra-one' ),
		'inline_style' => '

            ' . $swt_parent_class . ' {
                padding: 0;
            }

            ' . $swt_parent_class . ' .wp-block-latest-comments__comment-avatar{
                width: 24px;
                height: 24px;
            }

            ' . $swt_parent_class . '.has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta, ' . $swt_parent_class . '.has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt {
               margin-' . rtl_css( 'left' ) . ': 35px;
            }

            ' . $swt_parent_class . ' .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta {
                font-size: var(--wp--preset--font-size--small);
                color: var(--wp--preset--color--neutral);
                font-weight: var(--wp--custom--font-weight--regular);
            }

            ' . $swt_parent_class . ' .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta .wp-block-latest-comments__comment-date{
                font-size: var(--wp--preset--font-size--x-small);
                font-weight: var(--wp--custom--font-weight--regular);
                margin-top: 0.36em;
            }

            ' . $swt_parent_class . ' .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt p{
                font-size: var(--wp--preset--font-size--x-small);
                font-weight: var(--wp--custom--font-weight--regular);
            }
            
		',
	) 
);
