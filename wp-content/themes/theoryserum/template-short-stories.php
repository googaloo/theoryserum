<?php /* * *  Template Name: Short Stories * */ ?>
<?php get_header(); ?>

<h1 class="stories-header">Short Stories</h1>

<div class="featured-sidebar-container">

	<div class="featured-container">

		<div class="article-img">

<?php

// Needs to run through all posts to grab latest top featured so 'posts_per_page' needs to be large enough to run through it
$short_stories_top_featured_query = new WP_Query( array( 'post_type' => 'my-short-stories','posts_per_page' => -1 ) );

while ($short_stories_top_featured_query->have_posts() ) : $short_stories_top_featured_query->the_post(); ?>



			<?php if ( get_post_meta( $post->ID, 'wpcf-top-featured-post', true ) === 'top-featured' ) :

			if ( has_post_thumbnail() ) {
				the_post_thumbnail('ts-top-featured');
			} ?>

		</div><!-- end article-img -->

		<h2 class="top-featured-article-header top-featured-header"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
		<p class="featured-post-date"><?php the_date(); ?></p><!-- end .post-date -->
		<div class="featured-article-comment-number"> <a href="<?php comments_link(); ?>"><span class="comment-image"></span><?php comments_number('0','1','%'); ?></a></div><!-- end .article-comment-number -->

		<article>
		 <p class="featured-article-content"><?php echo get_the_excerpt(); ?><a class="ts-button" href="<?php echo get_permalink($post->ID); ?>">Read More</a></p>
		</article>

	</div><!-- end .featured-container -->

	<?php get_sidebar(); ?>

</div><!-- end .featured-sidebar-container -->

<?php

endif;

endwhile;

wp_reset_postdata();

$short_stories_query = new WP_Query( array( 'post_type' => 'my-short-stories','posts_per_page' => 10 ) );

while ( $short_stories_query->have_posts() ) : $short_stories_query->the_post(); ?>

<?php if ( get_post_meta( $post->ID, 'wpcf-top-featured-post', true ) !== 'top-featured' ) : ?>

	<div class="article-container">

		<p class="divider"></p>

		<div class="article-img">

			<?php if ( has_post_thumbnail() ) {

				if ( get_post_meta( $post->ID, 'wpcf-featured-post', true ) === 'featured' ) {

					the_post_thumbnail('full');

				} else {

					the_post_thumbnail('ts-thumbnail');

				}

			} ?>

		</div><!-- end .article-img -->

		<div class="article-content-container">

			<header>

				<h2 class="article-header"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>

				<p class="post-date"><?php echo get_the_date(); ?></p><!-- end .post-date -->

				<div class="article-comment-number"> <a href="<?php comments_link(); ?>"><span class="comment-image"></span><?php comments_number('0','1','%'); ?></a></div><!-- end .article-comment-number -->

			</header>

			<article class="article-content"><?php the_excerpt(); ?><a class="ts-button" href="<?php echo get_permalink($post->ID); ?>">Read More</a></article>

		</div><!-- end .article-content-container -->

	</div><!-- end .article-container -->

	<?php

	endif;

	endwhile; 

	// PAGINATION
	if ( $prev_link = get_previous_posts_link() ) {
		$explode_prev_link = explode('"', get_previous_posts_link());
		$print_prev_link = '<a href="'.$explode_prev_link[1].'">Prev</a>'; 
	} else {
		$print_prev_link = "Prev";
	}

	if ( $next_link = get_next_posts_link() ) {
		$explode_next_link = explode('"', get_next_posts_link());
		$print_next_link = '<a class="ts-pagination-next" href="'.$explode_next_link[1].'">Next</a>'; 
	} else {
		$print_next_link = "Next";
	}

	?>

	<div class="ts-pagination-container">

		<ul class="ts-pagination-list">

			<li><?php echo $print_prev_link; ?></li>
			<li><a href="<?php echo site_url(); ?>">Home</a></li>
			<li><?php echo $print_next_link; ?></li>

		</ul><!-- end .ts-pagination-list -->

	</div><!-- end .ts-pagination-container -->

	<?php get_footer(); 