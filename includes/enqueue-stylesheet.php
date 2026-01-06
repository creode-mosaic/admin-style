<?php
/**
 * Enqueues a stylesheet in the WordPress admin.
 *
 * @package Mosaic Admin Style
 */

add_action(
	'admin_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'mosaic-admin-style',
			plugin_dir_url( __FILE__ ) . 'assets/css/style.css',
			array(),
			'1'
		);
	}
);
