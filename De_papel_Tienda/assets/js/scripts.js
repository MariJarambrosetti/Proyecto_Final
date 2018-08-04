// API GOOGLE MAPS

	function initMap(){
		var vina = {'lat': -33.015348, 'lng':  -71.550028}

		map = new google.maps.Map(document.getElementById('map'), {
			center: vina, 
			zoom: 13 
		});		
	};


$(document).ready(function() {
	
	// instagram
	
	var userFeed = new Instafeed({
		get: 'user',
		userId: '4937064559',
		limit: '7',
		accessToken: '4937064559.1677ed0.f024df80ce4441758db21a4970469d64',
		template: '<div class ="col-md"><a href="{{link}}"><img class="img-fluid insta" src="{{image}}"</a></div>'
	});
	userFeed.run();

	// regla para que cambie de color el logo

	$(window).scroll(function(event) {
		event.preventDefault();
		if ( $(window).scrollTop() ) {
			$("#logo").attr('src', 'assets/img/depapel_1.png');
		} else {
			$("#logo").attr('src', 'assets/img/depapel.png');
		}
	});

	// regla para el cambio de color del menu

	$(window).scroll(function(event) {
		event.preventDefault();
		if ( $(window).scrollTop() ) {
			$(".nav-link").attr('style', 'color :#343a40!important');
		} else {
			$(".nav-link").attr('style', 'color :white!important');
		}
	});


});


