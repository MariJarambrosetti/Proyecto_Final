var window_size, limit;


// API GOOGLE MAPS

	function initMap(){
		var vina = {'lat': -33.015348, 'lng':  -71.550028}

		map = new google.maps.Map(document.getElementById('map'), {
			center: vina, 
			zoom: 13 
		});		
	};


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

})(jQuery);


// regla para que cambie de color el logo
$(window).scroll(function(event) {
	event.preventDefault();

	var scroll_position =  $(window).scrollTop();

	if ( scroll_position > limit ) {
		$("#logo").attr('src', 'wp-content/themes/depapel-theme/assets/images/depapel_1.png');
	} else {
		$("#logo").attr('src', 'wp-content/themes/depapel-theme/assets/images/depapel.png');
	}


	if ( scroll_position > limit && window_size > 980 ) {
		$(".nav-link").attr('style', 'color :#343a40!important');
	} else {
		$(".nav-link").attr('style', 'color :white!important');
	}

});

// regla para el cambio de color del menu


