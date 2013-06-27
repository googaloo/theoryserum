<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

	<?php wp_head(); ?>
</head>

<body onload="init();">
	
	<div id="page" class="hfeed site">

		<div class="masthead">

			<div class="tech-follow-box"><img class="tech-follow" src="" /></div>
			<div class="main-header-logo" style="background: url('<?php echo get_template_directory_uri() ?>/images/main_header_logo.jpg');"></div>
			<canvas id="tech-hexagons" width="265" height="200"></canvas>
			
		</div>

		<nav class="main-nav">

			

		</nav>
