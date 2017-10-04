<?php 

function blank_theme_scripts() {
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', ['jquery'], '', true);
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', [], '', true);


	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css');
}

add_action( 'wp_enqueue_scripts', 'blank_theme_scripts' );