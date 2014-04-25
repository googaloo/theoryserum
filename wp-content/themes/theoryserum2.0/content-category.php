<?php if ( have_posts() ) : $postcount = 1; ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php // Check if post is sticky or first post ?>
		<?php if ( is_sticky() || $postcount == 1 ) : ?>

		<?php // add to post count to get out of sticky / first post ?>
		<?php $postcount++; ?>

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

		<?php // It's not sticky, but regular post ?>
		<?php else: ?>

		<div class="row" style="border-top: 1px solid lightgray;">

			<article class="large-12 columns">

				<div class="article-img">

					<a href="<?php echo get_permalink($post->ID); ?>">

					<?php if ( has_post_thumbnail() ) {

						if ( get_post_meta( $post->ID, 'wpcf-featured-post', true ) === 'featured' ) {

							the_post_thumbnail('full');

						} else {

							the_post_thumbnail('ts-thumbnail');

						}

					} ?>

					</a>

				</div><!-- end .article-img -->
				<div class="post-cat-box"><?php echo get_the_category_list(); ?></div><!-- end .post-cat-box -->

				<div class="article-content-container">

					<header>

						<h2 class="article-header"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
						
						<p class="post-date"><?php echo get_the_date(); ?></p><!-- end .post-date -->

						<div class="article-comment-number"> <a href="<?php comments_link(); ?>"><span class="comment-image"></span><?php comments_number('0','1','%'); ?></a></div><!-- end .article-comment-number -->

					</header>

					<article class="article-content"><?php the_excerpt(); ?><a class="ts-button" href="<?php echo get_permalink($post->ID); ?>">Read More</a></article>

				</div><!-- end .article-content-container -->

			</article><!-- end .article-container -->

		</div>

		<?php endif; ?>


	<?php endwhile; ?>

<?php endif; ?>