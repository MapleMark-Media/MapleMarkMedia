<?php
/**
 * Register separator block styles.
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.3
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

register_block_style(
	'core/separator',
	array(
		'name'         => SWT_PFX . '-separator-wide-thin-line',
		'label'        => __( 'Wide Thin Line', 'spectra-one' ),
		'inline_style' => '
        .is-style-' . SWT_PFX . '-separator-wide-thin-line.wp-block-separator:not(.is-style-wide):not(.is-style-dots){
                max-width: var(--wp--style--global--content-size);
                width: 100%;
                border-width: 1px;
			}
		',
	)
);
