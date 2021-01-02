<?php 
	
	function calling_resources(){
		wp_enqueue_style('style',get_stylesheet_uri(),'','1.0.0');
	}
	add_action('wp_enqueue_scripts','calling_resources');





























// Hide all WordPress Update Notifications in Dashboard
add_action('after_setup_theme', 'remove_core_updates'); 
function remove_core_updates() { 
    if (!current_user_can('update_core')) { 
	return;
    } 
add_action('init', create_function('$a', "remove_action( 'init', 'wp_version_check' );"), 2);
add_filter('pre_option_update_core', '__return_null');
add_filter('pre_site_transient_update_core', '__return_null');
 
}

 ?>