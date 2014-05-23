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
//add_image_size('ts-top-featured', 700, 395, true);
add_image_size('ts-books', 290, 450, true);
add_image_size('ts-category', 1160, 450, true);
add_image_size('ts-books-thumb', 145, 225, true);

// remove p tags from img in $content
function filter_ptags_on_images($content) {
    // do a regular expression replace...
    // find all p tags that have just
    // <p>maybe some white space<img all stuff up to /> then maybe whitespace </p>
    // replace it with just the image tag...
    return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}

// we want it to be run after the autop stuff... 10 is default.
add_filter('the_content', 'filter_ptags_on_images');


//////////////////
// Post Formats //
//////////////////

add_theme_support('post-formats', array('aside', 'quote', 'video' ));


//////////////
// Sidebars //
//////////////

function theoryserum_widgets_init() {

	register_sidebar( array(
	    'name'         => __( 'About', 'theoryserum2.0' ),
	    'id'           => 'about',
	    'description'  => __( 'Sidebar for About', 'theoryserum2.0' ),
	    'before_title' => '<h3 class="subheader">',
	    'after_title'  => '</h3><img src="' . get_template_directory_uri() . '/images/rustin-odom-8bit.png" alt="Rustin Odom 8bit" class="about-image" />',
	    'before_widget' => '<div class="about-widget">',
	    'after_widget' => '</div>'
	) );

	register_sidebar( array(
	    'name'         => __( 'Follow', 'theoryserum2.0' ),
	    'id'           => 'follow',
	    'description'  => __( 'Sidebar for Follow Social Connections', 'theoryserum2.0' ),
	    'before_title' => '',
	    'after_title'  => '',
	    'before_widget' => '<li>',
	    'after_widget' => '</li>'
	) );

}