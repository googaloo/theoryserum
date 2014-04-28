<?php

/*
 * 
 *  Template Name: Contact Me
 * 
 */

?>

<?php get_header(); ?>

<div class="row"><div class="large-12 columns"><h1 class="contact-header">Contact Me</h1></div></div>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

	<?php endwhile;

endif; ?>

<?php get_footer(); ?>