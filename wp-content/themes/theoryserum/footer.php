
	<div class="footer">

		<div class="footer-about footer-piece">

			<h3 class="subheader">About</h3>
			<p>I have a very attention demanding, truth-seeking itch just around the backside of my soul, completely out of reach. As soon as I feel like I can force my stretch enough to get at it, I fall short just a few inches, but it might as well be lightyears away.</p>
			<p>I've had this itch as long as I can remember and it's manifested itself through religion, psychology, futurism, creativity, science, pseudo-science, and philosophy. I'm not sure I'll ever find my absolute truth but hey, the journey is rewarding enough!</p>

		</div> <!-- end .footer-about -->

		<div class="footer-follow footer-piece">

			<h3 class="subheader">Follow</h3>
			<ul class="social-icon-list">
				<li><a href="https://www.facebook.com/TheorySerum" target="_blank"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" /><span class="social-text">Facebook</span></a></li>
				<li><a href="https://twitter.com/theoryserum" target="_blank"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" /><span class="social-text">Twitter</span></a></li>
				<li><a href="http://feeds.feedburner.com/Theoryserum" target="_blank"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/rss.png" /><span class="social-text">RSS</span></a></li>
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