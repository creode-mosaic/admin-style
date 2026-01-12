<?php
/**
 * Login page amends.
 *
 * @package Mosaic Admin Style
 */

add_filter(
	'login_headertext',
	function () {
		return __( 'Powered by WordPress and Mosaic' );
	}
);

add_filter(
	'login_headerurl',
	function () {
		return 'https://mosaic.creode.co.uk';
	}
);
