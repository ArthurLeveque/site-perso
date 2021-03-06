$(allInView);
$(window).scroll(allInView);


function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function allInView() {
	if (isScrolledIntoView($(".counter"))){
		$('.counter').each(function() {
			var $this = $(this),
			countTo = $this.attr('data-count');
			  
			$({ countNum: $this.text()}).animate({
			    countNum: countTo
			},

			{

			    duration: 1000,
			    easing:'linear',
			    step: function() {
			      $this.text(Math.floor(this.countNum));
			    },
			    complete: function() {
			      $this.text(this.countNum);
			    }

			});  
		});
	}
}