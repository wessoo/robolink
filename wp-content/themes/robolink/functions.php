<?php
//add_filter( 'wp_footer', 'pc_custom_footer' );
//add_filter( 'the_content', 'pc_custom_content' );
 
function pc_custom_footer() {
	echo "<div style='text-align:center;'><p>This is my custom footer message!</p></div>";
}

function pc_custom_content($content) {
	return $content . "<div><p>Brought to you by PressCoders.com!</p></div>";
}

function wp_add_scripts() {
	wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('bootstrap');
	
	wp_register_script('docs', get_stylesheet_directory_uri() . '/js/docs.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('docs');
	
	wp_register_style('carousel', get_stylesheet_directory_uri() . '/css/carousel.css', array(), '1.0', 'all');
	wp_enqueue_style('carousel');

	wp_register_style('bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), '1.0', 'all');
	wp_enqueue_style('bootstrap-style');
}

add_action('wp_enqueue_scripts', 'wp_add_scripts');
add_theme_support( 'post-thumbnails' ); 
//add_action('wp_enqueue_docs_scripts', 'wp_add_docs_scripts');
//add_action('wp_enqueue_carousel_style', 'wp_add_carousel_styles');

?>