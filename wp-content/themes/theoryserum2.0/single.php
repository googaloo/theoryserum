<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	
<div class="row">
	<div class="large-12 columns">

		<div class="row">
			
			<div class="large-12 columns">

				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('full');
				} ?>

				<div class="post-cat-box"><?php echo get_the_category_list(); ?></div><!-- end .post-cat-box -->

			</div>

		</div>

		<header class="row">

			<div class="large-12 columns">

				<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
				<p class="featured-post-date"><?php the_date(); ?></p><!-- end .post-date -->
				
				<h3>Share: </h3>
				<i class="icon-googleplus"></i>
				<i class="icon-facebook"></i>
				<i class="icon-twitter"></i>
				<i class="icon-reddit"></i>

			</div>

		</header>

		<div class-"row">

			<div class="large-12 columns">

				<?php the_content(); ?>

			</div>

		</div>

	</div>

</div>

	<?php endwhile; ?>
<?php endif; ?>

<div class="row">

	<div class="large-4 columns left">

		<span class="single-pagination-previous"><?php previous_post_link('<span class="single-pagination-arrow">&laquo;</span> %link'); ?></span>

	</div>

	<div class="large-4 columns right">

		<span class="single-pagination-next"><?php next_post_link('%link <span class="single-pagination-arrow">&raquo;</span>'); ?></span>

	</div>

</div>

<?php comments_template(); ?>

<?php get_footer(); ?>