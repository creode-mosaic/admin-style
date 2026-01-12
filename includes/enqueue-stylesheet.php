<?php
/**
 * Enqueues a stylesheet in the WordPress admin.
 *
 * @package Mosaic Admin Style
 */

/**
 * Version of the mosaic admin style.
 *
 * @var string
 */
$mosaic_admin_style_version = '3';

/**
 * Enqueues the mosaic admin style in the admin area.
 */
add_action(
	'admin_enqueue_scripts',
	function () use ( $mosaic_admin_style_version ) {
		wp_enqueue_style(
			'mosaic-admin-style',
			plugin_dir_url( __FILE__ ) . 'assets/css/style.css',
			array(),
			$mosaic_admin_style_version
		);
	}
);

/**
 * Adds the mosaic admin style to the login page.
 */
add_action(
	'login_head',
	function () use ( $mosaic_admin_style_version ) {
		// phpcs:ignore WordPress.WP.EnqueuedResources.NonEnqueuedStylesheet
		echo '<link rel="stylesheet" type="text/css" href="' . esc_url( plugin_dir_url( __FILE__ ) . 'assets/css/style.css?v=' . $mosaic_admin_style_version ) . '" />';
	}
);
