var window_size, limit, limit2;

(function($) {
	
	// instagram
	var userFeed = new Instafeed({
		get: 'user',
		userId: '4937064559',
		limit: '7',
		accessToken: '4937064559.1677ed0.f024df80ce4441758db21a4970469d64',
		template: '<div class ="insta_imagen col-md col-sm"><a href="{{link}}"><img class="img-fluid insta" src="{{image}}"</a></div>'
	});

	userFeed.run();

	window_size = $(window).width();
	limit = $('#carousel_home').outerHeight() - 85;
	limit2 = $('#primary').outerHeight() - 85;
	


})(jQuery);


// regla para que cambie de color
$(window).scroll(function(event) {

	event.preventDefault();

	var scroll_position =  $(window).scrollTop();

	if ( scroll_position > limit ) {
		$("#logo").attr('src', params.url + '/assets/images/depapel_1.png');
	} else if (scroll_position > limit2 ) {
		$("#logo").attr('src', params.url + '/assets/images/depapel_1.png');
	} else {
		$("#logo").attr('src', params.url + '/assets/images/depapel.png');
	}



	if ( scroll_position > limit && window_size > 980 ) {
		$(".nav-link").attr('style', 'color :#343a40!important');
		$(".nav-link").attr('style', 'color :#343a40!important');
	} else {
		$(".nav-link").attr('style', 'color :white!important');
	}

});
