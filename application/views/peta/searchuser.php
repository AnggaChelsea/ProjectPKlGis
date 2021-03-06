
<html>
<head lang='en'>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" href="<?= base_url() ?>leaflet-search/src/leaflet-search.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
  <link rel="stylesheet" href="<?= base_url() ?>searchmap/src/leaflet-search.css" />
  <link rel="stylesheet" href="<?= base_url() ?>leaflet-search/src/leaflet-search.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-plugins/3.3.1/control/Layers.Load.min.js"></script>
  <script src="<?= base_url() ?>leaflet-search/src/leaflet-search.min.js"></script>




  <div class="main-content" style="margin-top:-70px;">
<button class="btn btn-primary" id="printBtn" onclick="print();">Print map</button><br><p></p>
<div id="map" style="height:350px"></div>
<p></p>

</div>
            <script>

		//ini data ngambil dari data base
		var data = [
		<?php foreach($tps as $key) {?>
		{"alamat":[<?= $key['latitude'] ?>,<?= $key['longitude'] ?>], "nama_sekolah":"<?= $key['nama_sekolah'] ?>"},
		<?php } ?>
		];

			// var map = L.map('map', { drawControl: true }).setView([-6.923648, 107.615584], 2);
			var map = new L.Map('map', {zoom: 9, center: new L.latLng(-6.91912, 106.92950) })
            map.addLayer(new L.tileLayer(
                'http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">Bappeda</a>, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Sukabumi</a>',
                    id: 'mapbox/streets-v11',
				}))


			//pencarian
			var markersLayer = new L.LayerGroup();	//layer contain searched elements
			map.addLayer(markersLayer);

			var controlSearch = new L.Control.Search({
				position:'topright',
				layer: markersLayer,
				initial: false,
				zoom: 14,
				marker: false
			});
			map.addControl( new L.Control.Search({
			layer: markersLayer,
			initial: false,
			zoom: 14,
			collapsed: true
			}) );

			for(i in data) {
			var nama_sekolah = data[i].nama_sekolah;	//value searched
			var alamat = data[i].alamat;		//position found
			var marker = new L.Marker(new L.latLng(alamat), {title: nama_sekolah} );//se property searched
			marker.bindPopup('nama sekolah: '+ nama_sekolah + ' <br> Coordinate ' + alamat );
			markersLayer.addLayer(marker);
			}

			//print
			L.control.browserPrint({
                printLayer:  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">Bappeda</a>, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Sukabumi</a>',
                                subdomains: 'abcd',
                                minZoom: 0,
                                maxZoom: 20
                            }),
                closePopupsOnPrint: false,
            }).addTo(map);

            map.on("browser-pre-print", function(e) {
                red.setStyle({fill: false});
            });

            map.on("browser-print-start", function(e) {
                // Green circle;
                e.printObjects["L.Circle"][1].setStyle({fillColor: "orange"});
                e.printObjects["L.Circle"][1].setRadius(312330);
            });

            map.on("browser-print-end", function(e) {
                red.setStyle({fill: true});
            });


            </script>


		     <style type="text/css">
		   
		    .grid-print-container { 
		        grid-template: auto 1fr auto / 1fr;
		        background-color: orange;
		    }
		    .grid-map-print {
		        grid-row: 1;
		    }
		    .title { 
		        grid-row: 1;
		        justify-self: center;
		        color: white;
		    }
		    .sub-content { 
		        grid-row: 0;
		        padding-left: 5px;
		    }
		</style>


            <div class="section-body">
            </div>
    </section>
</div>

</div>
