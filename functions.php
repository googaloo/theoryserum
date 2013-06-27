<?php

//////////////////////////////////////////////////////////////////
// ENQUE SCRIPTS AND STYLES //
////////////////////////////////////////////////////////////////

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