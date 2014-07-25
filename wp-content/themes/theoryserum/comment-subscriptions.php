<?php

/*
 * 
 *  Template Name: Comment Subscriptions
 * 
 */

?>

<?php get_header(); ?>


<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; ?>
<?php endif; ?>

<div style="background: #eaf6f7; width:100%; height: 4px; margin-top: 25px;"></div>

<?php get_footer(); ?>