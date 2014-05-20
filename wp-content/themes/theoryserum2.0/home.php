<?php get_header(); ?>

<h1 class="blog-header"><i class="icon-blog page-title-icon"></i> Blog</h1>

<?php if ( have_posts() ) : $postcount = 1; ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php // Check if post is sticky or first post ?>
		<?php if ( is_sticky() || $postcount == 1 ) : ?>

			<?php get_template_part( 'content', 'first' ); ?>
			<?php $postcount++; ?>

		<?php // It's not sticky, but regular post ?>
		<?php else : ?>

			<?php get_template_part( 'content', get_post_format() ); ?>			

		<?php endif; ?>

	<?php endwhile; ?>

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

<div class="ts-pagination row">

	<div class="large-1 large-offset-9 medium-2 medium-offset-6 small-2 small-offset-6 columns"><?php echo $print_prev_link; ?></div>
	<div class="large-1 medium-2 small-2 columns"><a href="<?php echo site_url(); ?>">Home</a></div>
	<div class="large-1 medium-2 small-2 columns"><?php echo $print_next_link; ?></div>

</div><!-- end .ts-pagination-list -->


<?php get_footer(); 