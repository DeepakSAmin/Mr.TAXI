<!DOCTYPE html>
<html>
<head>
	<title>Taxi Fare Calculator</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.leafletjs.com/leaflet/v1.3.4/leaflet.css" />
	<style>
		#map {
			height: 400px;
		}
	</style>
</head>
<body>
	<h1>Taxi Fare Calculator</h1>
	<div id="map"></div>
	<p>Click on the map to set the start and end points of the taxi ride.</p>
	<p id="distance"></p>
	<p id="cost"></p>
	<script src="https://cdn.leafletjs.com/leaflet/v1.3.4/leaflet.js"></script>
	<script>
		var map = L.map('map').setView([20.5937, 78.9629], 5);

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
			maxZoom: 18
		}).addTo(map);

		var startMarker = null;
		var endMarker = null;

		map.on('click', function(e) {
			if (startMarker === null) {
				startMarker = L.marker(e.latlng).addTo(map).bindPopup('Start point');
			} else if (endMarker === null) {
				endMarker = L.marker(e.latlng).addTo(map).bindPopup('End point');
				calculateDistanceAndCost();
			}
		});

		function calculateDistanceAndCost() {
			var startLat = startMarker.getLatLng().lat;
			var startLng = startMarker.getLatLng().lng;
			var endLat = endMarker.getLatLng().lat;
			var endLng = endMarker.getLatLng().lng;

			var url = "https://router.project-osrm.org/route/v1/driving/" + startLng + "," + startLat + ";" + endLng + "," + endLat + "?overview=false";
			fetch(url)
				.then(response => response.json())
				.then(data => {
					var distance = data.routes[0].distance / 1000;
					var cost = distance * 15; // assuming rate of Rs. 15 per km
					document.getElementById("distance").innerHTML = "Distance: " + distance.toFixed(2) + " km";
					document.getElementById("cost").innerHTML = "Cost: Rs. " + cost.toFixed(2);
				});
		}
	</script>
</body>
</html>
