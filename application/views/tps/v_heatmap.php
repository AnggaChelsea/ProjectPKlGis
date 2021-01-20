<div class="main-content" style="margin-top:-70px;" >
  

    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
    <style>
        #map { width: 100%; height: 400px; }
    </style>
</head>
<body>
<h1 style="text-align:center; font-size:20px;">Buat heat-map dengan manual menggunakan cursor atau touch screen dan mana yang Akan di tandai</h1>

<div id="map"></div>

<!-- <script src="../node_modules/simpleheat/simpleheat.js"></script>
<script src="../src/HeatLayer.js"></script>
 -->
<script src="<?= base_url() ?>heat-map/dist/leaflet-heat.js"></script>

<script src="http://leaflet.github.io/Leaflet.markercluster/example/realworld.388.js"></script>
<script>

var map = L.map('map').setView([-6.981874, 106.556569], 14);

var tiles = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">Bappeda SUkabumi</a> contributors',
}).addTo(map);
<?php foreach($tps as $key) { ?>

L.marker([<?= $key['latitude']?>, <?= $key['longitude'] ?>]).addTo(map)
.bindPopup('<h5><?= $key['nama_tps'] ?></h5> </p> <br>lokasi <?= $key['lokasi'] ?></br> kecamatan <?= $key['kecamatan'] ?>' )
.openPopup();

<?php } ?>

addressPoints = addressPoints.map(function (p) { return [p[0], p[1]]; });

var heat = L.heatLayer(addressPoints).addTo(map),
    draw = true;

map.on({
    movestart: function () { draw = false; },
    moveend:   function () { draw = true; },
    mousemove: function (e) {
        if (draw) {
            heat.addLatLng(e.latlng);
        }
    }
})

</script>
</body>
</html>


        <div class="section-body">
        </div>
    </section>
</div>
</div>