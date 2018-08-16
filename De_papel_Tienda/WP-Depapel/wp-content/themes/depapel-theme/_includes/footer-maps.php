<script>
	var map, vina = { lat: -33.015348, lng:  -71.550028 };

	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			center: vina,
			zoom: 13
		});

		var marker = new google.maps.Marker({map: map, position: vina});
		marker.addListener('click', function() {
			infowindow.open(map, marker);
		});
	}
</script>