<?php // Content section for sticky and first post in order to have a sidebar ?>
<section class="row">

	<article class="large-7 columns featured-article">

		<div class="article-img">

			<a href="<?php echo get_permalink($post->ID); ?>">

	<?php

	if ( has_post_thumbnail() ) {
		the_post_thumbnail('ts-top-featured');
	} 

	?>

			</a>

		</div><!-- end article-img -->
		<div class="post-cat-box"><?php echo get_the_category_list(); ?></div><!-- end .post-cat-box -->

			<h2 class="top-featured-article-header top-featured-header"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
			<p class="featured-post-date"><?php the_date(); ?></p><!-- end .post-date -->
			<div class="featured-article-comment-number"> <a href="<?php comments_link(); ?>"><span class="comment-image"></span><?php comments_number('0','1','%'); ?></a></div><!-- end .article-comment-number -->

		<div>
			<p class="featured-article-content"><?php echo get_the_excerpt(); ?><a class="ts-button" href="<?php echo get_permalink($post->ID); ?>">Read More</a></p>
		</div>

	</article><!-- end .featured-container -->

	<?php get_sidebar(); ?>

</section><!-- end .featured-sidebar-container -->