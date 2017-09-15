<?php

function theme_styles() {
	wp_enqueue_style('style'. get_stylesheet_uri() );
	wp_enqueue_style('reset', get_theme_file_uri('assets/css/reset.css'), array(), 1.0);
	wp_enqueue_style('grid', get_theme_file_uri('assets/css/grid.css'), array(), 1.0);
	wp_enqueue_style('main', get_theme_file_uri('assets/css/main.css'), array(), 1.0);
}

function theme_scripts() {
	wp_enqueue_script('jquery-1.11.0', get_theme_file_uri('assets/js/jquery-1.11.0.js'), array(), 1.0);
	wp_enqueue_script('main', get_theme_file_uri('assets/js/main.js'), array(), 1.0);
}

function theme_menus() {
	register_nav_menus(array(
		'primary_menu' => __('Primary Menu'),
		'footer_menu' => __('Footer Menu'),
	));
}

function theme_widgets() {
	register_sidebar(array(
		'name' => 'Primary Widgets',
		'id' => 'primary_widgets',
		'description' => 'This area is designated for Primary Widgets only.',
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Widgets',
		'id' => 'footer_widgets',
		'description' => 'This area is designated for Footer Widgets only.',
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}

function theme_excerpt_length($length) {
	return 25;
}

function theme_excerpt_more($more) {
	return  ' ...(more...)';
}

add_action('wp_enqueue_scripts','theme_styles');
add_action('wp_footer','theme_scripts');
add_action('init','theme_menus');
add_action('widgets_init','theme_widgets');

add_filter('excerpt_length','theme_excerpt_length');
add_filter('excerpt_more','theme_excerpt_more');

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array(
	'aside',
	'audio',
	'gallery',
	'image',
	'link',
	'quote',
	'video',
));


