<div class="main-content" style="margin-top:-440px;">


<div id="map"></div>
	<button id="populate">Populate 1 marker</button>
	<button id="remove">Remove 1 marker</button>

	<script>
      var cloudmadeUrl = 'http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/997/256/{z}/{x}/{y}.png',
			cloudmadeAttribution = 'Map data &copy; 2011 OpenStreetMap contributors, Imagery &copy; 2011 CloudMade',
			cloudmade = new L.TileLayer(cloudmadeUrl, {maxZoom: 18, attribution: cloudmadeAttribution}),
			latlng = new L.LatLng(-6.981874, 106.556569);

		var map = new L.Map('map', {center: latlng, zoom: 15, layers: [cloudmade]});

		var markers = new L.MarkerClusterGroup();
		var markersList = [];

		function populate() {
			for (var i = 0; i < 100; i++) {
				var m = new L.Marker(getRandomLatLng(map));
				markersList.push(m);
				markers.addLayer(m);
			}
			return false;
		}
		function populateRandomVector() {
			for (var i = 0, latlngs = [], len = 20; i < len; i++) {
				latlngs.push(getRandomLatLng(map));
			}
			var path = new L.Polyline(latlngs);
			map.addLayer(path);
		}
		function getRandomLatLng(map) {
			var bounds = map.getBounds(),
				southWest = bounds.getSouthWest(),
				northEast = bounds.getNorthEast(),
				lngSpan = northEast.lng - southWest.lng,
				latSpan = northEast.lat - southWest.lat;

			return new L.LatLng(
					southWest.lat + latSpan * Math.random(),
					southWest.lng + lngSpan * Math.random());
		}

		markers.on('clusterclick', function (a) {
			alert('cluster ' + a.layer.getAllChildMarkers().length);
		});
		markers.on('click', function (a) {
			alert('marker ' + a.layer);
		});

		populate();
		map.addLayer(markers);

		L.DomUtil.get('populate').onclick = function () {
			var bounds = map.getBounds(),
			southWest = bounds.getSouthWest(),
			northEast = bounds.getNorthEast(),
			lngSpan = northEast.lng - southWest.lng,
			latSpan = northEast.lat - southWest.lat;
			var m = new L.Marker(new L.LatLng(
					southWest.lat + latSpan * 0.5,
					southWest.lng + lngSpan * 0.5));
			markersList.push(m);
			markers.addLayer(m);
		};
		L.DomUtil.get('remove').onclick = function () {
			markers.removeLayer(markersList.pop());
        };
        
	</script>


</div>