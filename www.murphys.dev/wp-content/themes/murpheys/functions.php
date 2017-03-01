<?php 
	
// 	Adding Simple Grid framework
function add_theme_style() {
	wp_enqueue_style( 'simple-grid', get_template_directory_uri() . '/css/simple-grid.min.css',false,'1.0','all');
	
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css',false,'1.0','all');
	
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery', 'jquery-ui-core' ), 1.1, true);

}

add_action( 'wp_enqueue_scripts', 'add_theme_style' );


?>