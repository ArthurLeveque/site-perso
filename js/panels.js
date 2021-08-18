(function($) {
	var allPanels = $('.skill > .skill-desc').hide();
			   
	$('#skills > .skill > .skill-sh').click(function() {
		$target = $(this).next();

		if (!$target.hasClass('skill-active')) {
      $('.skill > .skill-sh').removeClass('skill-name-active');
      $(this).addClass('skill-name-active');

			allPanels.removeClass('skill-active').slideUp();
			$target.addClass('skill-active').slideDown();
		}
		else{
      $(this).removeClass('skill-name-active');
			$target.removeClass('skill-active').slideUp();
		}
		
		return false;
	});
})(jQuery);