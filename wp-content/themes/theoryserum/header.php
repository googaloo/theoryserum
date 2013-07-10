<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

	<?php wp_head(); ?>
</head>

<body>
	
	<div id="page" class="hfeed site">

		<div class="masthead">
			
			<div class="main-header-logo" style="background: url('<?php echo get_template_directory_uri() ?>/images/main_header_logo.jpg'), no-repeat;">

				<div class="hexagon-box">

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

			</div>

			<div class="tech-rotate-box" style="background: url('<?php echo get_template_directory_uri() ?>/images/rotator.png');"></div> <!-- end .tech-follow-box -->


		</div><!-- end .masthead -->

		<div id="nav-box"></div><!--end #nav-box -->
		<nav>

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

			</nav>