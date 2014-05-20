<?php // Content section for sticky and first post in order to have a sidebar ?>
<section class="row feature-article-container">

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
		<div class="post-cat-container"><div class="post-cat-box"><?php echo get_the_category_list(); ?></div></div><!-- end .post-cat-box -->

		<header class="article-header">
			<p class="post-date"><?php the_date(); ?></p><!-- end .post-date -->
			<h2 class="article-title featured-title"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
			<p class="article-comment-count"><i class="icon-bubble"></i><a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?></a></p><!-- end .article-comment-number -->

		</header>

		<article class="article-content">
			<?php the_excerpt(); ?>
		</article>

	</article><!-- end .featured-container -->

	<?php get_sidebar(); ?>

</section><!-- end .featured-sidebar-container -->