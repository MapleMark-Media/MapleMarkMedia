<?php
/**
 * Require All Extensions
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.1
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once __DIR__ . '/responsive.php';
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/metabox.php';
require_once __DIR__ . '/hide-elements.php';
require_once __DIR__ . '/remove-blocks.php';
require_once __DIR__ . '/admin-bar.php';
require_once __DIR__ . '/icomoon.php';
require_once __DIR__ . '/scroll-top.php';
require_once __DIR__ . '/dynamic-variables.php';

