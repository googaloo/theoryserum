
	<div class="footer">

		<div class="footer-about footer-piece">

			<h3 class="subheader">About</h3>
			<p>Monica dawson moloch donna troy nightcrawler lizard spider-man black mamba. Cat violator trickster bloodaxe chamber. Monica dawson moloch donna troy nightcrawler lizard spider-man black mamba. Cat violator trickster bloodaxe chamber. Monica dawson moloch donna troy nightcrawler lizard spider-man black mamba. Cat violator trickster bloodaxe chamber.</p>

		</div> <!-- end .footer-about -->

		<div class="footer-follow footer-piece">

			<h3 class="subheader">Follow</h3>
			<ul class="social-icon-list">
				<li><a href="#"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" /><span class="social-text">Facebook</span></a></li>
				<li><a href="#"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" /><span class="social-text">Twitter</span></a></li>
				<li><a href="#"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/rss.png" /><span class="social-text">RSS</span></a></li>
			</ul>

		</div> <!-- end .footer-about -->

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

</div> <!-- end #page .hfeed .site -->


<?php wp_footer(); ?>

</body>