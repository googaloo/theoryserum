<?php // Check if post is sticky ?>
<?php if ( is_sticky() ) : ?>

<section class="row">

	<article class="large-7 columns featured-article">

		<div class="article-img">

	<?php

	if ( has_post_thumbnail() ) {
		the_post_thumbnail('ts-top-featured');
	} ?>

		</div><!-- end article-img -->
		<div class="post-cat-box"><?php echo get_the_category_list(); ?></div><!-- end .post-cat-box -->

			<h2 class="top-featured-article-header top-featured-header"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
			<p class="featured-post-date"><?php the_date(); ?></p><!-- end .post-date -->
			<div class="featured-article-comment-number"> <a href="<?php comments_link(); ?>"><span class="comment-image"></span><?php comments_number('0','1','%'); ?></a></div><!-- end .article-comment-number -->

		<div>
			<p class="featured-article-content"><?php echo get_the_excerpt(); ?><a class="ts-button" href="<?php echo get_permalink($post->ID); ?>">Read More</a></p>
		</div>

	</article><!-- end .featured-container -->

	<?php get_sidebar(); ?>

</section><!-- end .featured-sidebar-container -->

<?php // It's not sticky, but regular post ?>
<?php else: ?>


<div class="row">

	<article class="large-9 columns" style="background: #CCC;">

		<p class="divider"></p>

		<div class="article-img">

			<?php if ( has_post_thumbnail() ) {																	//// OPPORTUNITY FOR CUSTOM POST FORMAT ////

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

				<h2 class="article-header"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
				
				<p class="post-date"><?php echo get_the_date(); ?></p><!-- end .post-date -->

				<div class="article-comment-number"> <a href="<?php comments_link(); ?>"><span class="comment-image"></span><?php comments_number('0','1','%'); ?></a></div><!-- end .article-comment-number -->

			</header>

			<article class="article-content"><?php the_excerpt(); ?><a class="ts-button" href="<?php echo get_permalink($post->ID); ?>">Read More</a></article>

		</div><!-- end .article-content-container -->

	</article><!-- end .article-container -->
	<div class="large-3 columns">

<?php // All for Related Posts ?>
<?php
// Get the category ID
$post_cat_ID;
foreach((get_the_category()) as $category) { 
    $post_cat_ID = $category->cat_ID;
} 

// Get post ID to avoid duplication
$main_ID = get_the_ID();

// Show related
$my_args = array( 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'title', 'category' => $post_cat_ID );
          $feature_posts = get_posts($my_args); ?>

          <h3>Related Posts</h3>
          <ul class="recent-posts-list">

          <?php foreach($feature_posts as $post) : //setup_postdata($post);
          	
          	// avoid showing current post
          	if ( $post->ID !== $main_ID ) {
				echo '<li><a href="' . home_url() . '/' . $post->post_name . '">' . $post->post_title . '</a></li>';
			}
		
          endforeach;

          echo '</ul>';
?>

	</div>

</div>

<?php endif; ?>







