
		<div class="row footer">

			<div class="footer-about large-6 columns">

				<?php get_sidebar('about'); ?>

			</div>

			<div class="footer-follow large-2 columns">

				<?php get_sidebar('follow'); ?>

			</div>

			<div class="footer-categories large-2 columns">

				<h3 class="subheader">Categories</h3>
				<?php wp_list_categories( array('style'=>'none') ); ?>

			</div> <!-- end .footer-about -->

			<div class="footer-pages large-2 columns">

				<h3 class="subheader">Pages</h3>
				<ul>
					<li class="page_item"><a href="<?php echo get_site_url(); ?>">Blog</a></li>
					<?php wp_list_pages( array('title_li' => '') ); ?>
				</ul>

			</div> <!-- end .footer-about -->

		</div> <!-- end .footer -->	

		<div class="ts-copyright right">&copy; <?php the_date('Y'); ?> <strong>TheorySerum</strong>. All Rights Reserved.</div>

	<div><!-- end main column -->

</div> <!-- end main row -->


<?php wp_footer(); ?>

</body>