<?php

/**
 * Plugin Name: TheorySerum Plugin
 * Plugin URI: http://theoryserum.com
 * Description: A plugin with various functions specific to TheorySerum
 * Version: 1.0
 * Author: Rustin L Odom
 * Author URI: http://www.rustinlodom.com
 * License: A "Slug" license name e.g. GPL2
 */


// Random subheader in header
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