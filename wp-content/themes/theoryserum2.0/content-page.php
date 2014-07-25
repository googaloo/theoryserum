<?php // Set up featured // ?>
<?php if ( get_post_meta( $post->ID, 'wpcf-featured-post', true ) === 'featured' ): ?>
	<?php $featured = true; ?>
<?php else : ?>
	<?php $featured = false; ?>
<?php endif; ?>

<?php // Set up thumbnails // ?>
<?php
	$post_thumbnail_id = get_post_thumbnail_id();
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>


<div class="row article-container">

	<article class="large-12 columns">

		<div class="row">

	<?php if ( $featured ): ?>

			<div class="large-12 columns">

				<a href="<?php echo get_permalink($post->ID); ?>"><img width="100%" src="<?php echo $post_thumbnail_url; ?>" /></a>

			</div>

		</div>

		<div class="row">

			<div class="large-12 columns">

	<?php else : ?>

			<div class="large-4 medium-12 small-12 columns">

				<a href="<?php echo get_permalink($post->ID); ?>"><img width="100%" src="<?php echo $post_thumbnail_url; ?>" /></a>
				<div class="post-cat-container"><div class="post-cat-box"><?php echo get_the_category_list(); ?></div></div><!-- end .post-cat-box -->

			</div>

			<div class="large-8 medium-12 small-12 left columns">

	<?php endif; ?>

	<?php if ( $featured ): ?>
		<div class="post-cat-container"><div class="post-cat-box"><?php echo get_the_category_list(); ?></div></div><!-- end .post-cat-box -->
	<?php endif; ?>

		<div class="article-content-container">

	<?php if ( $featured ): ?>
			<header class="article-header">
	<?php else : ?>
			<header class="non-featured-article-header">
	<?php endif; ?>

				<p class="post-date"><?php the_date(); ?></p><!-- end .post-date -->
				<h2 class="article-title"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
				<p class="article-comment-count"><i class="icon-bubble"></i><a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?> comments</a></p><!-- end .article-comment-number -->

			</header>

			<article class="article-content">
	<?php the_excerpt(); ?>
			</article>

		</div><!-- end .article-content-container -->

	</div>

	<?php if ( !$featured ): ?>
	</div>
	<?php endif; ?>

	</article><!-- end .article-container -->

</div>