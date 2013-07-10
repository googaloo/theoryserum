<?php

/*
 * 
 *  Template Name: Contact Me
 * 
 */

?>

<?php get_header(); ?>

<h1 class="contact_header">Contact Me</h1>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>


	<?php endwhile;

endif; ?>

<?php get_footer(); ?>