<?php

/*
 * 
 *  Template Name: My Games
 * 
 */

?>

<?php get_header(); ?>

<h1 class="page-header"><i class="icon-games page-title-icon"></i> My Games</h1>

<?php $games_top_featured_query = new WP_Query( array( 'post_type' => 'my-games','posts_per_page' => 10 ) ); ?>

<?php if ( $games_top_featured_query->have_posts() ) : ?>

	<?php while ( $games_top_featured_query->have_posts() ) : $games_top_featured_query->the_post(); ?>

		<?php if ( get_post_meta( $post->ID, 'wpcf-top-featured-post', true ) !== 'top-featured' ) : ?>

			<?php get_template_part( 'content', get_post_format() ); ?>		

		<?php endif; ?>

	<?php endwhile; ?>

<?php else: ?>

<h2 class="coming-soon-header">Coming Soon</h2>

<?php endif; ?>

<?php // PAGINATION ?>
<?php
if ( $prev_link = get_previous_posts_link() ) {
	$explode_prev_link = explode('"', get_previous_posts_link());
	$print_prev_link = '<i class="icon-arrow-left"></i><a href="'.$explode_prev_link[1].'">Prev</a>'; 
} else {
	$print_prev_link = "<i class='icon-arrow-left'></i>Prev";
}

if ( $next_link = get_next_posts_link() ) {
	$explode_next_link = explode('"', get_next_posts_link());
	$print_next_link = '<a class="ts-pagination-next" href="'.$explode_next_link[1].'">Next<i class="icon-arrow-right"></i></a>'; 
} else {
	$print_next_link = "Next<i class='icon-arrow-right'></i>";
}

?>

<div class="ts-pagination">

	<div class="row">

		<div class="large-1 large-offset-9 medium-2 medium-offset-6 small-2 small-offset-6 columns"><?php echo $print_prev_link; ?></div>
		<div class="large-1 medium-2 small-2 columns"><a href="<?php echo site_url(); ?>">Home</a></div>
		<div class="large-1 medium-2 small-2 columns"><?php echo $print_next_link; ?></div>

	</div>

</div><!-- end .ts-pagination -->
	
	<!-- resume global foundation grid -->
	<div class="row">

		<div class="large-12 large-centered columns">

<?php get_footer(); 