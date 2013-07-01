
	<div class="footer">

		<div class="footer-about">

			<h3 class="other-header">About</h3>
			<p>Monica dawson moloch donna troy nightcrawler lizard spider-man black mamba. Cat violator trickster bloodaxe chamber. Monica dawson moloch donna troy nightcrawler lizard spider-man black mamba. Cat violator trickster bloodaxe chamber. Monica dawson moloch donna troy nightcrawler lizard spider-man black mamba. Cat violator trickster bloodaxe chamber.</p>

		</div> <!-- end .footer-about -->

		<div class="footer-follow">

			<h3 class="other-header">Follow</h3>
			<a href="#"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" />Facebook</a>
			<a href="#"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" />Twitter</a>
			<a href="#"><img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/rss.png" />RSS</a>

		</div> <!-- end .footer-about -->

		<div class="footer-categories">

			<h3 class="other-header">Categories</h3>
			<?php wp_list_categories( array('style'=>'none') ); ?>

		</div> <!-- end .footer-about -->

		<div class="footer-pages">

			<h3 class="other-header">Pages</h3>
			<?php wp_list_pages( array('title_li' => '') ); ?>

		</div> <!-- end .footer-about -->

	</div> <!-- end .footer -->	

	</div> <!-- end #page .hfeed .site -->

<?php wp_footer(); ?>

</body>