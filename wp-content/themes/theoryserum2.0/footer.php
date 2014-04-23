
		<div class="footer">

			<?php get_sidebar('about'); ?>

			<?php get_sidebar('follow'); ?>

			<div class="footer-categories footer-piece">

				<h3 class="subheader">Categories</h3>
				<?php wp_list_categories( array('style'=>'none') ); ?>

			</div> <!-- end .footer-about -->

			<div class="footer-pages footer-piece">

				<h3 class="subheader">Pages</h3>
				<ul>
					<li class="page_item"><a href="<?php echo get_site_url(); ?>">Blog</a></li>
					<?php wp_list_pages( array('title_li' => '') ); ?>
				</ul>

			</div> <!-- end .footer-about -->
			<div class="ts-copyright">&copy; <?php the_date('Y'); ?> <strong>TheorySerum</strong>. All Rights Reserved.</div>
		</div> <!-- end .footer -->	

	<div><!-- end main column -->

</div> <!-- end main row -->


<?php wp_footer(); ?>

</body>