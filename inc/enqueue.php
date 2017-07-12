<?php
/*
	
@package sunsettheme
	
	========================
		ADMIN ENQUEUE FUNCTIONS
	========================
*/

function alexplug_load_admin_scripts( $garfio ){
	if ($garfio !=='toplevel_page_alex_plug'){
	return;	
	}
	wp_register_style('alexplug_admin', plugin_dir_url(__DIR__).'/css/alexplugin_admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('alexplug_admin');
	
	wp_enqueue_media();
	//wp_register_script( 'sunset-admin-script', get_template_directory_uri() . '/js/sunset.admin.js', array('jquery'), '1.0.0', true );
	//wp_enqueue_script( 'sunset-admin-script' );
	
}
add_action( 'admin_enqueue_scripts', 'alexplug_load_admin_scripts' );