jQuery(function($) {

	$(document).ready(function() {

		$('a[rel="social-share"]').on('click', function(e) {

			e.preventDefault();
			var link = $(this).attr('href');
			window.open(link, link, 'width=550, height=350');

		});

	})

});