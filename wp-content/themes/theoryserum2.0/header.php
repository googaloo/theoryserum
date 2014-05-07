<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>

	<!--[if IE 8]>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ie8_styles.css" />
	<![endif]-->

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
        
        <!-- Google Analytics -->
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-42862989-1', 'theoryserum.com');
        ga('send', 'pageview');
      </script>

	<?php wp_head(); ?>
</head>

<body>
	
	<div class="row">

		<div class="large-12 large-centered columns">

			<div class="row">
			
				<div class="large-12 hide-for-medium-down columns left masthead-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/main_header_logo.jpg'; ?>" alt="" /></a></div>
				<div class="medium-10 medium-centered show-for-medium-down columns masthead-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/main_header_logo_medium.jpg'; ?>" alt="" /></a></div>

				<?php get_subheader(); ?>

				<div class="hide-for-medium-down right hexagon-box">

					<div class='hexagon' style="background: url('<?php echo get_template_directory_uri(); ?>/images/hexagon.png'), no-repeat;"></div>
					<div class='hexagon' style="background: url('<?php echo get_template_directory_uri(); ?>/images/hexagon.png'), no-repeat;"></div>
					<div class='hexagon' style="background: url('<?php echo get_template_directory_uri(); ?>/images/hexagon.png'), no-repeat;"></div>
					<div class='hexagon' style="background: url('<?php echo get_template_directory_uri(); ?>/images/hexagon.png'), no-repeat;"></div>
					<div class='hexagon' style="background: url('<?php echo get_template_directory_uri(); ?>/images/hexagon.png'), no-repeat;"></div>
					<div class='hexagon' style="background: url('<?php echo get_template_directory_uri(); ?>/images/hexagon.png'), no-repeat;"></div>
					<div class='hexagon' style="background: url('<?php echo get_template_directory_uri(); ?>/images/hexagon.png'), no-repeat;"></div>
					<div class='hexagon' style="background: url('<?php echo get_template_directory_uri(); ?>/images/hexagon.png'), no-repeat;"></div>
					<div class='hexagon' style="background: url('<?php echo get_template_directory_uri(); ?>/images/hexagon.png'), no-repeat;"></div>

				</div> <!-- end .hexagon-box -->

			<!-- <div class="tech-rotate-box" style="background: url('<?php echo get_template_directory_uri() ?>/images/rotator.png');"></div> end .tech-follow-box -->

			</div>	

		</div>

	</div>

	<div id="nav-box" class="nav-box-no-hover hide-for-medium-down"></div><!--end #nav-box -->

	<!-- Menu Toggle -->
	<div class="row show-for-medium-down">

		<div class="medium-2 medium-centered small-1 small-centered columns toggle-menu">

			<i class="icon-menu"></i>

		</div>

	</div>

	<div class="row">

		<div class="large-8 large-centered columns">

		<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>			
		<?php $nav_args = array(

			'depth'       => 0,
			'sort_column' => 'menu_order, post_title',
			'menu_class'  => 'main-menu',
			'include'     => '',
			'exclude'     => '93',
			'echo'        => true,
			'show_home'   => 'Blog',
			'link_before' => '',
			'link_after'  => '' 

			);
			?>
			<?php wp_page_menu( $nav_args ); ?>

			<!-- Handle CSS3 navigation animations on hover -->

			<?php if ( is_home() ) : ?>

				<script type="text/javascript">
					jQuery(function($) {
						$(".main-menu ul li:first").addClass("current_page_item");
					});
				</script>

			<?php else : ?>

				<script type="text/javascript">
					jQuery(function($) {
						$(".main-menu ul li:first").addClass("page_item");
					});
				</script>

			<?php endif; ?>

		</div>

	</div>

	<div class="row">

		<div class="large-12 large-centered columns">