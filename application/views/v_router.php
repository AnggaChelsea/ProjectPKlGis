<div class="main-content" style="margin-top:-70px;">
    <input type="text" name="cari" id="cari" placeholder="Type titik mulai " style="border-top:none; border-left:none; border-right:none; display:none; ">
    <button style="background:blue; border:none; display:none;">Cari</button></p>
    <div id="map" style="height:510px"></div>
    <script>
        const cari = document.getElementById('cari').value;

        var map = L.map('map').setView([-6.91912, 106.92950], 7);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
        }).addTo(map);

        <?php foreach ($tps as $key) { ?>
            L.marker([<?= $key['latitude'] ?>, <?= $key['longitude'] ?>]).addTo(map)
                .bindPopup(`<h5><?= $key['nama_sekolah'] ?></h5> </p> <br>lokasi <?= $key['alamat'] ?></br> kecamatan <?= $key['kecamatan'] ?>
                </br> Kode Coordinate lat & Lng <br><?= $key['latitude'] ?>,&nbsp;<?= $key['longitude'] ?>
                <br><button class="btn btn-outline-success" onclick="return kesini(<?= $key['latitude'] ?>, <?= $key['longitude'] ?>)">Route kesini</button>`)
                .openPopup();

        <?php } ?>

        let control = L.Routing.control({
            waypoints: [
                L.latLng(-6.964016, 106.801462), //disini variable titik start 
                L.latLng(-6.850757, 106.875607) //disini titik akhir . z
            ],
            routeWhileDragging: true
        })
        control.addTo(map)

        function kesini(lat, Lng) {
            let latLng = L.latLng(lat, Lng);
            control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);
        }



        navigator.geolocation.getCurrentPosition(function(position) {
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;

        });
    </script>