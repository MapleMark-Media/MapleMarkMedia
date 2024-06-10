<?php
/**
 * Register tag cloud styles.
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.1
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


register_block_style(
	'core/tag-cloud',
	array(
		'name'         => SWT_PFX . '-tag-cloud-pill',
		'label'        => __( 'Pill', 'spectra-one' ),
		'inline_style' => '
            .is-style-' . SWT_PFX . '-tag-cloud-pill .tag-cloud-link {
                font-size: var(--wp--preset--font-size--x-small) !Important;
                padding: 6px 12px;
				border-radius: var(--wp--custom--border-radius--full);
				color: var(--wp--preset--color--body);
				background-color: var(--wp--preset--color--outline);
				margin-' . rtl_css( 'right' ) . ': var(--wp--preset--spacing--xx-small);
				margin-top: var(--wp--preset--spacing--xxx-small);
                margin-bottom: var(--wp--preset--spacing--xxx-small);
				line-height: var(--wp--custom--line-height--initial);
            }
		',
	) 
);
