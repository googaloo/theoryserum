<?php get_header(); ?>

<h1 class="search-header">Search Results for:</h1>
<h3><?php the_search_query(); ?></h3>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>

<?php endif; ?>


<?php // PAGINATION ?>
<?php
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

<nav class="row">

	<div class=" large-12 large-centered columns ts-pagination-container">

		<ul class="ts-pagination-list">

			<li><?php echo $print_prev_link; ?></li>
			<li><a href="<?php echo site_url(); ?>">Home</a></li>
			<li><?php echo $print_next_link; ?></li>

		</ul><!-- end .ts-pagination-list -->

	</div><!-- end .ts-pagination-container -->

</nav>

<?php get_footer(); 