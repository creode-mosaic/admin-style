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
