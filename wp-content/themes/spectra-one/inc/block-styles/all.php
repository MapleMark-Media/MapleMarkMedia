<?php
/**
 * Require All Utilities
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

require_once __DIR__ . '/post-terms.php';	
require_once __DIR__ . '/search.php';
require_once __DIR__ . '/button.php';
require_once __DIR__ . '/separator.php';
require_once __DIR__ . '/latest-posts.php';
require_once __DIR__ . '/categories.php';
require_once __DIR__ . '/tag-cloud.php';
require_once __DIR__ . '/latest-comments.php';
require_once __DIR__ . '/archives.php';
require_once __DIR__ . '/post-author.php';

