<?php
/**
 * Register post terms block styles.
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
	'core/post-terms',
	array(
		'name'         => SWT_PFX . '-post-terms-pill',
		'label'        => __( 'Pill', 'spectra-one' ),
		'inline_style' => '
			.wp-block-post-terms.is-style-' . SWT_PFX . '-post-terms-pill a {
				display: inline-block;
				font-size: var(--wp--preset--font-size--x-small);
				padding: 6px 12px;
				border-radius: var(--wp--custom--border-radius--full);
				color: var(--wp--preset--color--body);
				background-color: var(--wp--preset--color--outline);
				margin-' . rtl_css( 'right' ) . ': var(--wp--preset--spacing--xx-small);
				margin-top: var(--wp--preset--spacing--xxx-small);
				margin-bottom: var(--wp--preset--spacing--xxx-small);
				line-height: var(--wp--custom--line-height--initial);
			}

			.is-style-' . SWT_PFX . '-post-terms-pill .wp-block-post-terms__separator {
				display: none;
			}
		',
	) 
);
