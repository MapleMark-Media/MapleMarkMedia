<?php
/**
 * Register Latest post Styles.
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

$swt_parent_class = '.is-style-' . SWT_PFX . '-latest-posts-simple';

register_block_style(
	'core/latest-posts',
	array(
		'name'         => SWT_PFX . '-latest-posts-simple',
		'label'        => __( 'Simple', 'spectra-one' ),
		'inline_style' => '
            ' . $swt_parent_class . ' {
                color: var(--wp--preset--color--neutral);
            }
            
            ' . $swt_parent_class . ' > li {
                margin-bottom: var(--wp--preset--spacing--x-small);
            }

            ' . $swt_parent_class . '.swt-has-featured-image > li {
                position: relative;
                padding-' . rtl_css( 'right' ) . ': 75px;
            }


            ' . $swt_parent_class . ' .wp-block-latest-posts__featured-image {
                position: absolute;
                ' . rtl_css( 'right' ) . ': 0;
            }

            ' . $swt_parent_class . ' .wp-block-latest-posts__featured-image img {
                object-fit: cover;
                width: 56px;
                height: 56px;
            }

            ' . $swt_parent_class . ' a {
                display: block;
                color: var(--wp--preset--color--heading);
                font-size: var(--wp--preset--font-size--small);
                font-weight: var(--wp--custom--font-weight--medium);
            }

            ' . $swt_parent_class . ' .wp-block-latest-posts__post-author,' . $swt_parent_class . ' .wp-block-latest-posts__post-date {
                display: inline-block;
                font-size: var(--wp--preset--font-size--x-small);
                font-weight: var(--wp--custom--font-weight--regular);
            }

            ' . $swt_parent_class . ' .wp-block-latest-posts__post-author + time:before {
                content:"·";
                padding-' . rtl_css( 'right' ) . ': 5px;
                padding-' . rtl_css( 'left' ) . ': 5px;
                color: var(--wp--preset--color--neutral);
            }

            ' . $swt_parent_class . ' .wp-block-latest-posts__post-excerpt {
                font-size: var(--wp--preset--font-size--x-small);
                font-weight: var(--wp--custom--font-weight--regular);
                margin-top: 0.2em;
            }
		',
	) 
);
