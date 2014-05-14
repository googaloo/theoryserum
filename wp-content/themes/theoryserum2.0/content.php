<div class="row article-container">

	<article class="large-9 columns">

		<div class="row">

<?php if ( get_post_meta( $post->ID, 'wpcf-featured-post', true ) === 'featured' ): ?>

			<div class="large-12 columns">

				<a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail('full'); ?></a>

			</div>

		</div>

		<div class="row">

			<div class="large-12 columns">

<?php else : ?>

				<div class="large-3 columns">

					<a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail('ts-thumbnail'); ?></a>
					<div class="post-cat-container"><div class="post-cat-box"><?php echo get_the_category_list(); ?></div></div><!-- end .post-cat-box -->

				</div>

				<div class="large-9 left columns">

<?php endif; ?>

		<div class="article-img">

			<a href="<?php echo get_permalink($post->ID); ?>">

			</a>

		</div><!-- end .article-img -->
<?php if ( get_post_meta( $post->ID, 'wpcf-featured-post', true ) === 'featured' ): ?>
		<div class="post-cat-container"><div class="post-cat-box"><?php echo get_the_category_list(); ?></div></div><!-- end .post-cat-box -->
<?php endif; ?>

		<div class="article-content-container">

<?php if ( get_post_meta( $post->ID, 'wpcf-featured-post', true ) === 'featured' ): ?>
			<header class="article-header">
	<?php else : ?>
			<header>
<?php endif; ?>

				<p class="post-date"><?php the_date(); ?></p><!-- end .post-date -->
				<h2 class="article-title"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
				<p class="article-comment-count"><i class="icon-bubble"></i><a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?></a></p><!-- end .article-comment-number -->

			</header>

			<article class="article-content">
				<?php the_excerpt(); ?>
				<a class="right" href="<?php echo get_permalink($post->ID); ?>">Read More</a>
			</article>

		</div><!-- end .article-content-container -->

	</div>

	</article><!-- end .article-container -->






	<?php // Related Posts ?>
	<?php if ( get_post_type( get_the_ID() ) === 'post' ) : ?>

		<div class="large-3 columns">

		<h1><?php get_post_type( get_the_ID() ); ?></h1>

		<?php
		// Get the category ID
		$post_cat_ID;
		foreach((get_the_category()) as $category) { 
		    $post_cat_ID = $category->cat_ID;
		} 

		// Get post ID to avoid duplication
		$main_ID = get_the_ID();

		// Show related
		$my_args = array( 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'title', 'category' => $post_cat_ID );
		$feature_posts = get_posts($my_args); ?>

		          <h3>Related Posts</h3>
		          <ul class="recent-posts-list">

		          <?php foreach($feature_posts as $post) : //setup_postdata($post);
		          	
		          	// avoid showing current post
		          	if ( $post->ID !== $main_ID ) {
						echo '<li><a href="' . home_url() . '/' . $post->post_name . '">' . $post->post_title . '</a></li>';
					}
				
		          endforeach;

		          echo '</ul>';
		?>

	<?php endif; // end if post type is "post" to display "Related Posts" only on posts ?>

	</div>

</div>