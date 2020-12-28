<div class="main-content" style="margin-top:-500px;">

</p>

<div id="map" style="height:500px"></div>
<a href="<?= base_url(); ?>home/formpemetaan">Ajukan Data Pemetaan</a>
<p></p>
       <!-- Button trigger modal -->


            <script>
            
            var map = L.map('map').setView([-6.923648, 107.615584], 7);
            L.tileLayer(
                'http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">Bappeda</a>, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Sukabumi</a>',
                    id: 'mapbox/streets-v11',
                }).addTo(map);

                <?php foreach($tps as $key) { ?>

                L.marker([<?= $key['latitude']?>, <?= $key['longitude'] ?>]).addTo(map)
                .bindPopup('<h5><?= $key['nama_tps'] ?></h5> </p> <br>lokasi <?= $key['lokasi'] ?></br> kecamatan <?= $key['kecamatan'] ?>
                </br> Kode Coordinate lat & Lng <br><?= $key['latitude'] ?>,&nbsp;<?= $key['longitude'] ?> <br>  ')
                .openPopup();
                // z
                <?php } ?>

                

               
               
            </script>





            <div class="section-body">
            </div>
    </section>
</div>
</div>