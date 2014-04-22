<?php get_header(); ?>

	<?php

	if ( have_posts() ) :

		while ( have_posts() ) : the_post(); ?>

			<p class="divider"></p>

				<div class="article-img">

				<?php if ( has_post_thumbnail() ) {

					if ( get_post_meta( $post->ID, 'wpcf-featured-post', true ) === 'featured' ) {

						the_post_thumbnail('full');

					} else {

						the_post_thumbnail('ts-thumbnail');

					}

				} ?>

				</div><!-- end .article-ft-img -->
				<div class="post-cat-box"><?php echo get_the_category_list(); ?></div><!-- end .post-cat-box -->

				<header>

					<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
					<div class="post-date"><?php the_date(); ?></div><!-- end .post-date -->

				</header>

				<article><?php the_excerpt(); ?><a href="<?php echo get_permalink($post->ID); ?>">Read More</a></article>

		 <?php

		endwhile;
	endif;

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