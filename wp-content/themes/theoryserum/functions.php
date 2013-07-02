<?php

//////////////////////////////
// ENQUE SCRIPTS AND STYLES //
//////////////////////////////

add_action ( 'wp_enqueue_scripts', 'start_scripts' );
function start_scripts() {

	wp_enqueue_script('jquery');

	wp_register_script('easeljs', 'http://code.createjs.com/createjs-2013.05.14.min.js');
	wp_enqueue_script('easeljs');

	wp_register_script('main-script', get_template_directory_uri().'/js/script.js');
	wp_enqueue_script('main-script');

	wp_register_style('normalize', get_template_directory_uri().'/normalize.css');
	wp_enqueue_style('normalize');

}

//////////
// Navs //
//////////

register_nav_menu( 'primary', __( 'Primary Menu', 'theoryserum' ) );

//////////
// MISC //
//////////

// Enable featured images
add_theme_support( 'post-thumbnails' );
add_image_size('ts-thumbnail', 245, 138, true);
add_image_size('ts-top-featured', 700, 395, true);
add_image_size('ts-books', 290, 450, true);
add_image_size('ts-books-thumb', 145, 225, true);