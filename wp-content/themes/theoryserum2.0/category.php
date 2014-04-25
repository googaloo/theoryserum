<?php get_header(); ?>

		<?php get_template_part( 'content-category', get_post_format() ); ?>

	<?php

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