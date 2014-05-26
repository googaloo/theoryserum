<?php

/*
 * 
 *  Template Name: Contact Me
 * 
 */

?>

<?php get_header(); ?>

<div class="row">
	<div class="large-8 large-centered columns">
		<h1 class="page-header">Contact Me</h1>


<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

	<?php endwhile;

endif; ?>

	</div>
</div>

<?php get_footer(); ?>