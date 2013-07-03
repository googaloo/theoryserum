<?php

/*
 * 
 *  Template Name: My Books
 * 
 */

?>

<?php get_header(); ?>

	<h1 class="books-header">My Books</h1>

	<?php

	$books_featured_query = new WP_Query( array( 'post_type' => 'books','posts_per_page' => -1 ) );

	while ( $books_featured_query->have_posts() ) : $books_featured_query->the_post(); ?>

		<div class="featured-book-container">
		<?php if ( get_post_meta( $post->ID, 'wpcf-featured-post', true ) === 'featured' ) : ?>

			<div class="featured-book-img-container">

				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('ts-books-full');
				} ?>

			</div><!-- end featured-book-image-container -->

				<header>

					<h2 class="book-header"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>

				</header>

				<p class="book-descr"><?php the_content(); ?></p>

				<div class="books-social">

					<a rel='social-share' href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank" class="books-social-btns"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="<?php the_title(); ?> Facebook Share" /></a>
					<a rel='social-share' href="http://www.twitter.com/share?url=<?php echo the_permalink(); ?>" target="_blank" class="books-social-btns"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="<?php the_title(); ?> Twitter Share" /></a>
					<p class="isbn">ISBN: <?php echo get_post_meta( $post->ID, 'wpcf-isbn', true); ?></p>

				</div><!-- end .books-social -->

				<?php get_sidebar(); ?>

		<?php endif; ?>

		<div><!-- end .featured-book-container -->

	<?php endwhile;

	wp_reset_query();

	$books_query = new WP_Query( array( 'post_type' => 'books','posts_per_page' => 10 ) );

	while ( $books_query->have_posts() ) : $books_query->the_post(); ?>

		<p class="divider"></p>

		<?php if ( get_post_meta( $post->ID, 'wpcf-featured-post', true ) !== 'featured' ) : ?>

			<div class="book-img-container">

				<?php if ( has_post_thumbnail() ) {

					the_post_thumbnail('ts-books-thumb');

				} ?>

			</div><!-- end .book-img-container -->

			<header>

				<h2 class="book-header"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>

			</header>

				<p class="book-descr"><?php the_content(); ?></p>

				<div class="books-social">

					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank" class="books-social-btns"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="<?php the_title(); ?> Facebook Share" /></a>
					<a rel='social-share' href="http://www.twitter.com/share?url=<?php echo the_permalink(); ?>" target="_blank" class="books-social-btns"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="<?php the_title(); ?> Twitter Share" /></a>
					<p class="isbn">ISBN: <?php echo get_post_meta( $post->ID, 'wpcf-isbn', true); ?></p>

				</div><!-- end .books-social -->

	 	<?php

		endif;

	endwhile;

get_footer(); 