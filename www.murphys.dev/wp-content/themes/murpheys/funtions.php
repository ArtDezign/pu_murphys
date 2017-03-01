<?php
	
	//add theme Header Support
	$header_logo = array(
		
	'default-image'          => '',
	'width'                  => 150,
	'height'                 => 150,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);

add_theme_support( 'custom-header', $header_logo );

?>