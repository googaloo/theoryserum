<?php

//////////////////////////////
// ENQUE SCRIPTS AND STYLES //
//////////////////////////////

add_action ( 'wp_enqueue_scripts', 'start_scripts' );
function start_scripts() {

	wp_enqueue_script('jquery');

	wp_register_style('normalize', get_template_directory_uri().'/normalize.css');
	wp_enqueue_style('normalize');

	wp_register_style('main-style', get_stylesheet_uri());
	wp_enqueue_style('main-style');

	global $is_IE;
	if ( $is_IE ) {

		wp_register_style('ie8-style', get_template_directory_uri().'/ie8_style.css');
		wp_enqueue_style('ie8-style');		

		// script to help with IE
		wp_register_script('selectivizr', get_template_directory_uri().'/js/selectivizr-min.js');
		wp_enqueue_script('selectivizr');
	}

	wp_register_script('main-script', get_template_directory_uri().'/js/script.js');
	wp_enqueue_script('main-script');

}

//////////
// MISC //
//////////

// Enable featured images
add_theme_support( 'post-thumbnails' );
add_image_size('ts-thumbnail', 245, 138, true);
add_image_size('ts-top-featured', 700, 395, true);
add_image_size('ts-books', 290, 450, true);
add_image_size('ts-books-thumb', 145, 225, true);

///////// Custom functions //

// Random subheader
function get_subheader() {

	$randNum = rand(1,6);

	switch($randNum) {

		case 1:
			echo '<h2 class="masthead-subheader">Fringe Science, Theory and Fun!<span class="blinking-cursor">3</span></h2>';
			break;

		case 2:
			echo '<h2 class="masthead-subheader">An Excuse for Weird Research<span class="blinking-cursor">3</span></h2>';
			break;

		case 3:
			echo '<h2 class="masthead-subheader">Future. Theory. Science.<span class="blinking-cursor">3</span></h2>';
			break;

		case 4:
			echo '<h2 class="masthead-subheader">Fringe Existence<span class="blinking-cursor">3</span></h2>';
			break;

		case 5:
			echo '<h2 class="masthead-subheader">Figuring out this so-called Reality<span class="blinking-cursor">3</span></h2>';
			break;

		case 6:
			echo '<h2 class="masthead-subheader">Scratching that Truth-Seeking Itch<span class="blinking-cursor">3</span></h2>';
			break;

	}

}