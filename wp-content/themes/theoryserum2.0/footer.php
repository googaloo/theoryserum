	</div>

</div>

<div class="footer">

	<div class="row">

		<div class="large-12 columns">

			<div class="row">

				<div class="footer-about large-6 medium-12 small-12 columns">

					<?php get_sidebar('about'); ?>

				</div>

				<div class="footer-follow large-2 medium-4 small-6 columns">

					<?php get_sidebar('follow'); ?>

				</div>

				<div class="large-2 medium-4 small-6 columns">

					<?php get_sidebar('search'); ?>

				</div> <!-- end .footer-about -->

				<div class="footer-pages large-2 medium-4 small-12 columns">

					<h3 class="subheader">Pages</h3>
					<ul>
						<li class="page_item"><a href="<?php echo get_site_url(); ?>">Blog</a></li>
						<?php wp_list_pages( array('title_li' => '') ); ?>
					</ul>

				</div> <!-- end .footer-about -->

			</div> <!-- end .footer -->	

		</div>

	</div>

</div>

<div class="ts-copyright right">&copy; <?php the_date('Y'); ?> <strong>TheorySerum</strong>. All Rights Reserved.</div>

	<div><!-- end main column -->

</div> <!-- end main row -->


<?php wp_footer(); ?>

</body>