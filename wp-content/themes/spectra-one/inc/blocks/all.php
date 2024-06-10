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

require_once __DIR__ . '/post-featured-image.php';
require_once __DIR__ . '/latest-posts.php';
require_once __DIR__ . '/post-comments-form.php';
require_once __DIR__ . '/post-terms.php';
require_once __DIR__ . '/post-author.php';
require_once __DIR__ . '/navigation-submenu.php';
require_once __DIR__ . '/navigation.php';

