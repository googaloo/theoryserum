<?php

/*
 * 
 *  Template Name: Contact Me
 * 
 */

?>

<?php get_header(); ?>

<h1 class="contact-header">Contact Me</h1>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

	<div style="background: #eaf6f7; width:100%; height: 4px; margin-top: 25px;"></div>


	<?php endwhile;

endif; ?>

<?php get_footer(); ?>