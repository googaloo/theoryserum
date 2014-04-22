jQuery(function($) {

	$(document).ready(function() {

		$('a[rel="social-share"]').on('click', function(e) {

			e.preventDefault();
			var link = $(this).attr('href');
			window.open(link, link, 'width=550, height=350');

		});

		$('.post-categories li a').each(function(e) {
			$categoryName = $(this).html();
			switch ( $categoryName ) {
				case 'My Stuff' :
					$(this).css('background-color', '#fdc87a');
					break;
				case 'Theory' :
					$(this).css('background-color', '#7c7ab9');
					break;
				case 'Futurism' :
					$(this).css('background-color', '#a1dae2');
					break;
				case 'Fun Interwebs Stuff' :
					$(this).css('background-color', '#71a9db');
					break;
				case 'Reviews' :
					$(this).css('background-color', '#6ADEB2');
					break;
				case 'Philosophy' :
					$(this).css('background-color', '#FFA47A');
					break;
				case 'News' :
					$(this).css('background-color', '#557EA4');
					break;
				case 'Fringe-Science' :
					$(this).css('background-color', '#1B6F4F');
					break;
				default :
					$(this).css('background-color', '#CCCCCC');
					break;
			}
		});

		//$('#nav-box').css('width', screen.width);
		$(window).scroll(function(e) {
			if( $(window).scrollTop() >= 200 ) {
				$('#nav-box').css('position', 'fixed').css('top', '0');
				$('.main-menu').css('position', 'fixed').css('top', '3px');
			} else {
				$('#nav-box').css('position', 'absolute').css('top', '199px');
				$('.main-menu').css('position', 'absolute').css('top', '202px');
			}

		});
	
		$('#nav-box').on('mouseenter', function() {

			$('#nav-box').removeClass('nav-box-no-hover');
			$('#nav-box').addClass('nav-box-hover');

		}).on('mouseleave', function() {

			$('#nav-box').removeClass('nav-box-hover');
			$('#nav-box').addClass('nav-box-no-hover');

		});

		$('.main-menu').on('mouseenter', function() {

			$('#nav-box').removeClass('nav-box-no-hover');
			$('#nav-box').addClass('nav-box-hover');

		}).on('mouseleave', function() {

			$('#nav-box').removeClass('nav-box-hover');
			$('#nav-box').addClass('nav-box-no-hover');

		});

		

	});

});