<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="main-content" style="margin-top:-70px;" >
</p>

<div id="myloaction" ></div>

<div id="map" style="width:100%; height:500px"></div>
<a href="<?= base_url(); ?>home/formpemetaan" class="btn btn-outline-primary">Ajukan Data Pemetaan Sekolah</a>
<p></p>
            <script>
            
            var map = L.map('map').setView([-6.91912, 106.92950], 7);
            L.tileLayer(
                'http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    id: 'mapbox/streets-v11',
                }).addTo(map);
             
                <?php foreach($tps as $key) { ?>
                L.marker([<?= $key['latitude']?>, <?= $key['longitude'] ?>]).addTo(map)
                .bindPopup('<h5><?= $key['nama_sekolah'] ?></h5> </p> <br>lokasi <?= $key['alamat'] ?></br> kecamatan <?= $key['kecamatan'] ?>
                </br> Kode Coordinate lat & Lng <br><?= $key['latitude'] ?>,&nbsp;<?= $key['longitude'] ?>   ')
                .openPopup();
                // z
                <?php } ?>
             
            </script>
            <div class="section-body">
            </div>
    </section>
</div>
</body>
</html>