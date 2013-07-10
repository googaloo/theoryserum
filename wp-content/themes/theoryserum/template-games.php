<?php

/*
 * 
 *  Template Name: Games
 * 
 */

?>

<?php get_header(); ?>

	<h1 class="games-header">Games</h1>

	<?php

	// Needs to run through all posts to grab latest top featured so 'posts_per_page' needs to be large enough to run through it
	$games_top_featured_query = new WP_Query( array( 'post_type' => 'my-games','posts_per_page' => -1 ) );

	while ($games_top_featured_query->have_posts() ) : $games_top_featured_query->the_post(); ?>

	<div class="featured-sidebar-container">

		<div class="featured-container">

		<?php if ( get_post_meta( $post->ID, 'wpcf-top-featured-post', true ) === 'top-featured' ) :

			if ( has_post_thumbnail() ) {
				the_post_thumbnail('ts-top-featured');
			} ?>

			<header>

				<h2 class="top-featured-game-header top-featured-header"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
				<div class="post-date"><?php the_date(); ?></div><!-- end .post-date -->

			</header>

			<article class="games-play-btn"><?php the_excerpt(); ?><a href="<?php echo get_permalink($post->ID); ?>">Play</a></article>

		</div><!-- end .featured-container -->

		<?php get_sidebar(); ?>

	</div><!-- end .featured-sidebar-container -->

	<?php

	endif;

	endwhile;

	wp_reset_postdata();

	$games_query = new WP_Query( array( 'post_type' => 'my-games','posts_per_page' => 10 ) );

	while ( $games_query->have_posts() ) : $games_query->the_post(); ?>

	<div class="article-container">

		<?php if ( get_post_meta( $post->ID, 'wpcf-top-featured-post', true ) !== 'top-featured' ) : ?>

			<p class="divider"></p>

			<div class="article-ft-img">

			<?php if ( has_post_thumbnail() ) {

				if ( get_post_meta( $post->ID, 'wpcf-featured-post', true ) === 'featured' ) {

					the_post_thumbnail('full');

				} else {

					the_post_thumbnail('ts-thumbnail');

				}

			} ?>

			</div><!-- end .article-ft-img -->

			<header>

				<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
				<div class="post-date"><?php the_date(); ?></div><!-- end .post-date -->

			</header>

			<article class="games-play-btn"><?php the_excerpt(); ?><a href="<?php echo get_permalink($post->ID); ?>">Play</a></article>

	 <?php

		endif; ?>

		</div><!-- end .article-container -->

	<?php endwhile;

	// PAGINATION
	if ( $prev_link = get_previous_posts_link() ) {
		$explode_prev_link = explode('"', get_previous_posts_link());
		$print_prev_link = '<a href="'.$explode_prev_link[1].'">Previous</a>'; 
	} else {
		$print_prev_link = "Preview";
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
 				<li><a class="ts-pagination-home" href="<?php echo site_url(); ?>">Home</a></li>
 				<li><?php echo $print_next_link; ?></li>

 			</ul>
 			
 		</div><!-- end .ts-pagination-container -->

<?php get_footer(); 