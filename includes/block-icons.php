<?php
/**
 * Integrates block icon set for any Mosaic block which specifies a valid icon name.
 *
 * @package Mosaic Admin Style
 */

/**
 * Changes a valid block icon name to an inline SVG.
 */
add_filter(
	'mosaic_block_icon',
	function ( string $icon ) {
		if ( str_contains( $icon, '<svg ' ) ) {
			return $icon;
		}

		if ( ! file_exists( __DIR__ . '/assets/block-icons/' . $icon . '.svg' ) ) {
			return $icon;
		}

		// phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
		$svg = file_get_contents( __DIR__ . '/assets/block-icons/' . $icon . '.svg' );

		return strip_tags( $svg, '<svg><title><path>' );
	},
	10
);
