<?php /* * *  Template Name: Short Stories * */ ?>

<?php get_header(); ?>

<h1 class="stories-header">Short Stories</h1>

<?php $short_stories_query = new WP_Query( array( 'post_type' => 'my-short-stories','posts_per_page' => 10 ) ); ?>

<?php while ( $short_stories_query->have_posts() ) : $short_stories_query->the_post(); ?>

	<?php if ( get_post_meta( $post->ID, 'wpcf-top-featured-post', true ) !== 'top-featured' ) : ?>


		<?php get_template_part( 'content', get_post_format() ); ?>
	

	<?php endif; ?>

<?php endwhile; ?>

	<?php

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