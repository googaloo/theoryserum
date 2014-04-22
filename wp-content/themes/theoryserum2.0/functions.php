<?php

//////////////////////////////
// ENQUE SCRIPTS AND STYLES //
//////////////////////////////

add_action ( 'wp_enqueue_scripts', 'start_scripts' );
function start_scripts() {

	wp_enqueue_script('jquery');

	wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css');
	wp_enqueue_style('normalize');

	wp_register_style('foundation', get_template_directory_uri().'/css/foundation.css');
	wp_enqueue_style('foundation');	

	wp_register_style('main-style', get_stylesheet_uri());
	wp_enqueue_style('main-style');

	global $is_IE;
	if ( $is_IE ) {

		wp_register_style('ie8-style', get_template_directory_uri().'css/ie8_style.css');
		wp_enqueue_style('ie8-style');		

		// script to help with IE
		wp_register_script('selectivizr', get_template_directory_uri().'/js/selectivizr-min.js');
		wp_enqueue_script('selectivizr');
	}

	wp_register_script('foundation-script', get_template_directory_uri().'/js/foundation.min.js');
	wp_enqueue_script('foundation-script');

	wp_register_script('main-script', get_template_directory_uri().'/js/script.js');
	wp_enqueue_script('main-script');

}

//////////
// MISC //
//////////

// Enable featured images
add_theme_support( 'post-thumbnails' );
add_image_size('ts-thumbnail', 245, 140, true);
add_image_size('ts-top-featured', 700, 395, true);
add_image_size('ts-books', 290, 450, true);
add_image_size('ts-books-thumb', 145, 225, true);

///////// Custom functions //

// Random subheader
function get_subheader() {

	$randNum = rand(1,8);

	switch($randNum) {

		case 1:
			echo '<h3 class="masthead-subheader hide-for-medium-down">Fringe Science, Theory and Fun!<span class="blinking-cursor">3</span></h3>';
			break;

		case 2:
			echo '<h3 class="masthead-subheader hide-for-medium-down">An Excuse for Weird Research<span class="blinking-cursor">3</span></h3>';
			break;

		case 3:
			echo '<h3 class="masthead-subheader hide-for-medium-down">Future. Theory. Science.<span class="blinking-cursor">3</span></h3>';
			break;

		case 4:
			echo '<h3 class="masthead-subheader hide-for-medium-down">Fringe Existence<span class="blinking-cursor">3</span></h3>';
			break;

		case 5:
			echo '<h3 class="masthead-subheader hide-for-medium-down">Figuring out this so-called Reality<span class="blinking-cursor">3</span></h3>';
			break;

		case 6:
			echo '<h3 class="masthead-subheader hide-for-medium-down">Scratching that Truth-Seeking Itch<span class="blinking-cursor">3</span></h3>';
			break;

		case 7:
			echo '<h3 class="masthead-subheader hide-for-medium-down">Science and Science Fiction for All!<span class="blinking-cursor">3</span></h3>';
			break;

		case 8:
			echo '<h3 class="masthead-subheader hide-for-medium-down">Things competing for my obsession<span class="blinking-cursor">3</span></h3>';
			break;

	}

}


//////////////////
// Post Formats //
//////////////////

add_theme_support('post-formats', array('aside', 'quote', 'video' ));

// Custom post formats


//////////////
// Sidebars //
//////////////

register_sidebar( array(
    'name'         => __( 'About', 'theoryserum2.0' ),
    'id'           => 'about',
    'description'  => __( 'Sidebar for About', 'theoryserum2.0' ),
    'before_title' => '<h3 class="subheader">',
    'after_title'  => '</h3>',
    'before_widget' => '<aside>',
    'after_widget' => '</aside>'
) );