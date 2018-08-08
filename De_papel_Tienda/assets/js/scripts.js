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
		template: '<div class ="insta_imagen col-md col-sm"><a href="{{link}}"><img class="img-fluid insta" src="{{image}}"</a></div>'
	});
	userFeed.run();

	// regla para que cambie de color el logo

	$(window).scroll(function(event) {
		event.preventDefault();
		if ( $(window).scrollTop() > 300 ) {
			$("#logo").attr('src', 'assets/img/depapel_1.png');
		} else {
			$("#logo").attr('src', 'assets/img/depapel.png');
		}
	});

	// regla para el cambio de color del menu
	

	$(window).resize(function(event) {
		event.preventDefault();
		if ($(window).width() > 980) {

			// si windows mide más de 980, ejecutará el cambio de color con el scroll
			$(window).scroll(function(event) {
				event.preventDefault();
				if ( $(window).scrollTop() > 300 ) {
					$(".nav-link").attr('style', 'color :#343a40!important');
				} else {
					$(".nav-link").attr('style', 'color :white!important');
				}
				
			});

		} else { 
			// si windows es menor a 980 se mantendrá en blanco el color 
			$(".nav-link").attr('style', 'color :white!important');
		}
	});
});


