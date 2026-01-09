<?php
/**
 * Adds a notice to the admin bar.
 *
 * @package Mosaic Admin Style
 */

/**
 * Add the admin bar notice markup.
 */
add_action(
	'admin_bar_menu',
	function ( WP_Admin_Bar $wp_admin_bar ) {
		$wp_admin_bar->add_node(
			array(
				'id'    => 'mosaic-admin-bar-notice',
				'href'  => 'https://mosaic.creode.co.uk',
				'title' => '<span class="mosaic-admin-bar-notice__wrapper"><span class="mosaic-admin-bar-notice__text">' . __( 'Powered by', 'mosaic-admin-style' ) . '</span><img src="' . plugin_dir_url( __FILE__ ) . 'assets/logos/1.svg" alt="Mosaic" class="mosaic-admin-bar-notice__logo-image" /></span>',
				'meta'  => array(
					'target' => '_blank',
				),
			)
		);
	},
	20
);

/**
 * Enqueue the admin bar notice stylesheet on the front end.
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'mosaic-admin-bar-notice',
			plugin_dir_url( __FILE__ ) . 'assets/css/admin-bar-notice.css',
			array(),
			'1'
		);
	}
);

/**
 * Enqueue the admin bar notice stylesheet on the admin pages.
 */
add_action(
	'admin_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'mosaic-admin-bar-notice',
			plugin_dir_url( __FILE__ ) . 'assets/css/admin-bar-notice.css',
			array(),
			'1'
		);
	}
);
