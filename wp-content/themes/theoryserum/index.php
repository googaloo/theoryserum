<?php get_header(); ?>

	<?php

	$feat_query = new WP_Query( array( 'meta_value' => 'top-featured','posts_per_page' => -1 ) );

	while ($feat_query->have_posts() ) : $feat_query->the_post(); ?>

	<div class="featured-sidebar-container">

		<div class="featured-container">

			<div class="article-img">

			<?php if ( get_post_meta( $post->ID, 'wpcf-top-featured-post', true ) === 'top-featured' ) :

			if ( has_post_thumbnail() ) {
				the_post_thumbnail('ts-top-featured');
			} ?>

		</div><!-- end article-img -->
		<div class="post-cat-box"><?php echo get_the_category_list(); ?></div><!-- end .post-cat-box -->
			
			<header>

				<h2 class="top-featured-article-header top-featured-header"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
				<div class="post-date"><?php the_date(); ?></div><!-- end .post-date -->

			</header>

			<article><?php the_excerpt(); ?><a href="<?php echo get_permalink($post->ID); ?>">Read More</a></article>

		</div><!-- end .featured-container -->

		<?php get_sidebar(); ?>

	</div><!-- end .featured-sidebar-container -->

	<?php

	endif;

	endwhile;

	wp_reset_postdata();

	if( have_posts() ) : 
		while ( have_posts() ) : the_post(); ?>

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
				<div class="post-cat-box"><?php echo get_the_category_list(); ?></div><!-- end .post-cat-box -->

				<div class="article-content-container">
					
					<header>

						<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
						<div class="post-date"><?php the_date(); ?></div><!-- end .post-date -->

					</header>

					<article><?php the_excerpt(); ?><a href="<?php echo get_permalink($post->ID); ?>">Read More</a></article>

				</div><!-- end .article-content-container -->

			</div><!-- end .article-container -->

		 <?php

			endif;

		endwhile; 

	endif;

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