(function($){
	// for sidenav and carousel
	$(function(){
		$('.sidenav').sidenav();
		$('.carousel.carousel-slider').carousel({
			fullWidth: true
		});
	}); // end of document ready
})(jQuery); // end of jQuery name space
// $(document).ready(function() {
// 	var s = $("nav");
// 	var pos = s.position();					   
// 	$(window).scroll(function() {
// 		var windowpos = $(window).scrollTop();
// 		if (windowpos >= pos.top & windowpos <= s.height()) {
// 			s.addClass("transparent");
// 			s.removeClass("green");	
// 		} else {
// 			s.addClass("green");
// 			s.removeClass("transparent");	
// 		}
// 	});
// });