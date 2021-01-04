<?php 
	

	function calling_resources(){
		wp_enqueue_style('style',get_stylesheet_uri(),'','1.0.0');
	}
	add_action('wp_enqueue_scripts','calling_resources');
	
	function theme_setup(){
		register_nav_menus([
			'first_menu' => 'Main Menu',
			'footer_menu'=> 'Footer Menu'		
		]);
		add_theme_support('post-thumbnails');
	}
	add_action('after_setup_theme','theme_setup');

	// Our Widgets
	function ourWidgets(){
		register_sidebar([
			'name' 			=> 'Left Sidebar',
			'description'   => 'This is for Sidebar Registration in LeftSide',
			'id'			=> 'ls',
			'before_widget' => '<div class="sidebar">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>Sidebar Heading</h2>',
			'after_title'   => '/<h2>'
		]);
		register_sidebar([
			'name' 			=> 'Red Sidebar',
			'description'   => 'This is for Sidebar Registration in Red Zone',
			'id'			=> 'red',
			'before_widget' => '<div class="b_f_s_wrap">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="red">Our Dynamic Heading 1</h2>',
			'after_title'   => '/<h2>'
		]);
		register_sidebar([
			'name' 			=> 'Orange Sidebar',
			'description'   => 'This is for Sidebar Registration in Orange Zone',
			'id'			=> 'orange',
			'before_widget' => '<div class="b_f_s_wrap">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="orange">Our Dynamic Heading 2</h2>',
			'after_title'   => '/<h2>'
		]);
		register_sidebar([
			'name' 			=> 'Green Sidebar',
			'description'   => 'This is for Sidebar Registration in Green Zone',
			'id'			=> 'green',
			'before_widget' => '<div class="b_f_s_wrap">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="green">Our Dynamic Heading 3</h2>',
			'after_title'   => '/<h2>'
		]);
	}
	add_action('widgets_init','ourWidgets');

	// Excerpt Function
	function excerpt($num) {
		$limit = $num+1;
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='readmore'>Continue Reading &raquo;</a>";
		echo $excerpt;
	}



	


























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