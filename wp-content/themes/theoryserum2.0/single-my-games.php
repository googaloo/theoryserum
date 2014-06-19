<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

<?php // Set up thumbnails // ?>
<?php
	$post_thumbnail_id = get_post_thumbnail_id();
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>
	
<div class="row">
	<div class="large-12 columns">

		<div class="row">
			
			<div class="large-12 columns">

				<?php if ( has_post_thumbnail() ) : ?>
					<img width="100%" src="<?php echo $post_thumbnail_url; ?>" />

					<div class="post-cat-container"><div class="post-cat-box"><?php echo get_the_category_list(); ?></div></div><!-- end .post-cat-box -->

				<?php endif; ?>

			</div>

		</div>

		<header class="row">

			<div class="large-10 columns">

				<header class="article-header">

					<p class="post-date"><?php the_date(); ?></p><!-- end .post-date -->
					<h2 class="article-title"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
					<p class="article-comment-count"><i class="icon-bubble"></i><a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?> comments</a></p><!-- end .article-comment-number -->

				</header>

			</div>

			<div class="large-2 columns">

				<div class="share-container">
					<a target="_blank" href="javascript:myPopup('https://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php the_title(); ?>&amp;p[summary]=yuuuuuup up')"><i class="icon-facebook"></i></a>
					<a target="_blank" href="javascript:myPopup('https://twitter.com/home?status=<?php the_permalink(); ?>')"><i class="icon-twitter"></i></a>
					<a target="_blank" href="javascript:myPopup('https://plus.google.com/share?url=<?php the_permalink(); ?>')"><i class="icon-googleplus"></i></a>
					<a target="_blank" href="javascript:myPopup('http://reddit.com/submit?url=<?php the_permalink(); ?>')"><i class="icon-reddit"></i></a>
				</div>

			</div>

		</header>

		<div class="row">

			<div class="large-12 columns single-content">

				<?php the_content(); ?>

			</div>

		</div>

	</div>

</div>

	<?php endwhile; ?>
<?php endif; ?>

<hr class="hide-for-medium-down">

<div class="single-pagination-container hide-for-medium-down">

	<div class="row">

		<div class="large-6 columns left single-pagination-previous">

			<span><?php previous_post_link('<i class="icon-arrow-left"></i> %link'); ?></span>

		</div>

		<div class="large-6 columns right single-pagination-next">

			<span><?php next_post_link('%link <i class="icon-arrow-right"></i>'); ?></span>

		</div>

	</div>

</div>

<hr>

<?php comments_template(); ?>

<?php get_footer(); ?>