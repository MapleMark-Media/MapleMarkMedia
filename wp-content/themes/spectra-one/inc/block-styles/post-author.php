<?php
/**
 * Register post author block style.
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

$swt_parent_class = '.is-style-' . SWT_PFX . '-post-author-simple';

register_block_style(
	'core/post-author',
	array(
		'name'         => SWT_PFX . '-post-author-simple',
		'label'        => __( 'Simple', 'spectra-one' ),
		'inline_style' => '
        
        ' . $swt_parent_class . ' {
            flex-wrap: inherit;
        }

        ' . $swt_parent_class . ' .wp-block-post-author__avatar  {
            margin-' . rtl_css( 'right' ) . ': 1.8em;
        }

        ' . $swt_parent_class . ' .avatar  {
                width: 95px;
                height: 95px;
                object-fit: cover;
                border-radius: var(--wp--custom--border-radius--full);
			}

            ' . $swt_parent_class . ' .wp-block-post-author__name {
                font-size: var(--wp--preset--font-size--medium);
                font-weight: var(--wp--custom--font-weight--semi-bold);
                color: var(--wp--preset--color--heading);
                line-height: var(--wp--custom--line-height--initial);
                text-transform: capitalize;
                width: 100%;
			}

            ' . $swt_parent_class . ' .wp-block-post-author__bio {
                margin-top: 10px;
                font-size: var(--wp--preset--font-size--small);
			}

            ' . $swt_parent_class . ' .wp-block-post-author__content {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                flex-direction: column;
                justify-content: center;
                flex-basis: inherit;
                flex-grow: inherit;
			}
		',
	)
);

