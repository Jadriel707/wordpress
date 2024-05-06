<?php


/**
 * QuantumFashion functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage QuantumFashion
 * @since QuantumFashion 1.0
 */

function quantumfashion_theme_scripts() {
    // Enqueue theme stylesheet for the front-end.
    wp_enqueue_style( 'quantumfashion-style',  get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'quantumfashion-fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );
	wp_enqueue_script('quantumfashion-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('quantumfashion-jquery-sticky', get_template_directory_uri() . '/assets/js/jquery-sticky.js', array('jquery') );    
}

add_action( 'wp_enqueue_scripts', 'quantumfashion_theme_scripts' );
add_editor_style( 'style.css' );




// register own theme pattern

function quantumfashion_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'quantumfashion' => array( 'label' => __( 'QuantumFashion', 'quantumfashion' ) )
	);

	$block_pattern_categories = apply_filters( 'quantumfashion_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'quantumfashion_register_pattern_category');

