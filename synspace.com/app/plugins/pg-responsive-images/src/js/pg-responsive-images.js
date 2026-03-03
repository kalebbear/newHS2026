jQuery(document).ready(function($) {

	(function() {

		if ($.featherlight) {
			$.featherlight.defaults.beforeOpen = function() {
				handleScrollbar('open');
			};

			$.featherlight.defaults.beforeClose = function() {
				handleScrollbar('close');
			};
		};

		// featherlight implementation
		$('picture[data-lightbox]').each(function() {
			var oPicture = $(this);
			if (oPicture.attr('data-lightbox')) {
				oPicture.attr('data-featherlight', oPicture.attr('data-lightbox'));
			}
			oPicture.removeAttr('data-lightbox');
		});

		var handleScrollbar = function(option) {
			var scrollDiv = document.createElement("div");
			scrollDiv.className = "scrollbar-measure";
			document.body.appendChild(scrollDiv);

			// Get the scrollbar width
			var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
			var hasScrollbar = window.innerWidth > document.documentElement.clientWidth;

			if (option === 'open' && $('.scrollbar-measure').length === 1) {
				$('html').css('margin-right', scrollbarWidth);
			} else if (option === 'close') {
				$('html').css('margin-right', '');
			}

			// Delete the DIV
			document.body.removeChild(scrollDiv);

		};

	})();

});