<?php get_header(); ?>

<?php

if ( have_posts() ) : 
	while ( have_posts() ) : the_post();

		the_content(); ?>

		<canvas id="game"></canvas>

		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('ts-thumbnail');
		} ?>

		<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>

<?php

	endwhile;
endif;

?>

<div class='single-pagination'>

	<span class="single-pagination-previous"><?php previous_post_link(); ?></span>
	<span class="single-pagination-home"><a class="single-pagination-home" href="<?php echo site_url(); ?>">Home</a></span>
	<span class="single-pagination-next"><?php next_post_link(); ?></span>

</div><!-- end .single-pagination -->

<?php get_footer(); ?>