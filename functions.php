<?php

function theme_excerpt_length($length) {
	return 25;
}

function theme_excerpt_more() {
	return ' ...(more...)';
}

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