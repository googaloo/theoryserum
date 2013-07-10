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
				case 'Other Peoples Stuff' :
					$(this).css('background-color', '#71a9db');
					break;
				case 'Reviews' :
					$(this).css('background-color', '#6ADEB2');
					break;
				case 'Philosophy' :
					$(this).css('background-color', '#FFA47A');
					break;
				default :
					$(this).css('background-color', '#CCCCCC');
					break;
			}
		});

		//$('#nav-box').css('width', screen.width);

	});
});