<?php
/*
 * Disallow direct access
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Forbidden.' );
}
/*
* Enqueue parent style.
*/
function consultivo_scripts() {
	wp_enqueue_style( 'consultivo-parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'consultivo_scripts' );

/**
 * Registers pattern categories.
 *
 * @since SaasLauncher 1.0.0
 *
 * @return void
 */
function consultivo_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'consultivo-patterns' => array( 'label' => __( 'Consultivo Patterns', 'consultivo' ) ),
	);

	$block_pattern_categories = apply_filters( 'consultivo_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'consultivo_register_pattern_category', 9 );
