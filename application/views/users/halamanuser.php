<link
  rel="stylesheet"
  href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css"
/>
<!-- Make sure you put this AFtER leaflet.js, when using with leaflet -->
<script src="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.umd.js"></script>

<div id="map"></div>

<script type="text/javascript">
const map = L.map('map').setView([51.505, -0.09], 13);
L.tileLayer('//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
const search = new GeoSearch.GeoSearchControl({
  provider: new GeoSearch.OpenStreetMapProvider(),
});
map.addControl(search);
</script>