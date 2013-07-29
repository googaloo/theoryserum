<?php get_header(); ?>

<?php

if ( have_posts() ) : 
	while ( have_posts() ) : the_post(); ?>
	
	<div class="single-container">
		<div class="article-img">

		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
		} ?>

	</div><!-- end .article-img -->
	<div class="post-cat-box"><?php echo get_the_category_list(); ?></div><!-- end .post-cat-box -->

		<header class="single-header">
			<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
			<p class="featured-post-date"><?php the_date(); ?></p><!-- end .post-date -->
		</header>
		<div class="single-content"><?php the_content(); ?></div><!-- .single-content -->
</div><!-- end .single-container -->

<?php
	endwhile;
endif;

?>

<div class='single-pagination'>

	<span class="single-pagination-previous"><?php previous_post_link('<span class="single-pagination-arrow">&laquo;</span> %link'); ?></span>
	<span class="single-pagination-next"><?php next_post_link('%link <span class="single-pagination-arrow">&raquo;</span>'); ?></span>

</div><!-- end .single-pagination -->

<?php comments_template(); ?>

<?php get_footer(); ?>