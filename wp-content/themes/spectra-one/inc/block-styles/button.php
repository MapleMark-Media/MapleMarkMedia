<?php
/**
 * Register Button Block Styles.
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
	'core/button',
	array(
		'name'         => SWT_PFX . '-button-secondary',
		'label'        => __( 'Secondary', 'spectra-one' ),
		'inline_style' => '
			div.is-style-' . SWT_PFX . '-button-secondary .wp-element-button {
                color: var(--wp--preset--color--body);
				background: var(--wp--preset--color--surface);
			}

            div.is-style-' . SWT_PFX . '-button-secondary .wp-element-button:hover {
                color: var(--wp--preset--color--body);
				background: var(--wp--preset--color--surface);
			}
		',
	)
);

register_block_style(
	'core/button',
	array(
		'name'         => SWT_PFX . '-button-inverse',
		'label'        => __( 'Inverse', 'spectra-one' ),
		'inline_style' => '
			div.is-style-' . SWT_PFX . '-button-inverse .wp-element-button {
                color: #1F2937;
				background: #fff;
			}

            div.is-style-' . SWT_PFX . '-button-inverse .wp-element-button:hover {
                color: #1F2937;
				background: #fff;
			}
		',
	)
);
