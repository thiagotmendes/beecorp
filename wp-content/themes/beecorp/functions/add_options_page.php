<?php
if( function_exists('acf_add_options_page') ) {

	$menuBanner = acf_add_options_page(array(
		'page_title' 	=> 'Home site',
		'menu_title' 	=> 'Home',
		'menu_slug' 	=> 'home',
		'position'     => 2,
		'redirect' 		=> false
	));

	$menuBanner = acf_add_options_page(array(
		'page_title' 	=> 'Footer',
		'menu_title' 	=> 'Footer',
		'menu_slug' 	=> 'Footer',
		'position'     => 2,
		'redirect' 		=> false
	));

}
