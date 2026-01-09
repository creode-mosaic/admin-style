<?php
/**
 * Mosaic Admin Style MU plugin.
 *
 * @package Mosaic Admin Style
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

// Enqueue the stylesheet in the WordPress admin.
require_once __DIR__ . '/includes/enqueue-stylesheet.php';

// Add a notice to the admin bar.
require_once __DIR__ . '/includes/admin-bar-notice.php';

// Integrate block icon set.
require_once __DIR__ . '/includes/block-icons.php';
