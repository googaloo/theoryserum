<?php get_header(); ?>

<?php

if ( have_posts() ) : 
	while ( have_posts() ) : the_post(); ?>

		<div class="article-img">

		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
		} ?>

	</div><!-- end .article-img -->

		<div class="post-cat-box"><?php echo get_the_category_list(); ?></div><!-- end .post-cat-box -->
		<header>
			<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
		</header>
		<?php the_content();

	endwhile;
endif;

?>

<div class='single-pagination'>

	<span class="single-pagination-previous"><?php previous_post_link(); ?></span>
	<span class="single-pagination-home"><a class="single-pagination-home" href="<?php echo site_url(); ?>">Home</a></span>
	<span class="single-pagination-next"><?php next_post_link(); ?></span>

</div><!-- end .single-pagination -->

<?php get_footer(); ?>