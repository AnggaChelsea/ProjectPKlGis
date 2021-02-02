<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINEARICONS -->
    <link rel="stylesheet" href="<?= base_url(); ?>template/daftar/fonts/linearicons/style.css">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="<?= base_url(); ?>template/daftar/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- DATE-PICKER -->
    <link rel="stylesheet" href="<?= base_url(); ?>template/daftar/vendor/date-picker/css/datepicker.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>template/daftar/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>template/daftar/css/style.scss">

</head>

<body>

    <div class="wrapper">
        <div class="inner">

            <form action="<?= base_url('home/registrationmap'); ?>" enctype="multipart/form-data" method="POST">
                <h3>Pemetaan Sekolah</h3>

                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="">NPSN *</label>
                        <span class="lnr "></span>
                        <input type="text" class="form-control " name="npsn" value="<?= set_value('npsn'); ?>" placeholder="23332321..">
                        <span style="color: red;"><?= form_error('npsn', '<span class="text-danger pl-3">', '<span>'); ?></span>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Nama Sekolah*</label>
                        <span class="lnr "></span>
                        <input type="text" class="form-control " name="nama_sekolah" value="<?= set_value('nama_sekolah'); ?>" placeholder="SMK.....">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="">alamat *</label>
                        <span class="lnr "></span>
                        <input type="text" class="form-control " name="alamat" value="<?= set_value('alamat'); ?>" placeholder="Jl.Citarik rt/rw 02/01">
                    </div>
                    <span style="color: red;"><?= form_error('alamat', '<span class="text-danger pl-3">', '<span>'); ?></span>
                    <div class="form-wrapper">
                        <label for="">desa *</label>
                        <span class="lnr "></span>
                        <input type="text" class="form-control " name="desa" value="<?= set_value('desa'); ?>" placeholder="Desa Pasirsuren">
                        <span style="color: red;"><?= form_error('desa', '<span class="text-danger pl-3">', '<span>'); ?></span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="">kecamatan *</label>
                        <span class="lnr "></span>
                        <input type="text" class="form-control " name="kecamatan" placeholder="">
                    </div>
                    <div class="form-wrapper">
                        <label for="">jumlah Siswa *</label>
                        <span class="lnr "></span>
                        <input type="number" class="form-control " name="jumlah_siswa" placeholder="43000">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="">jumlah Guru *</label>
                        <span class="lnr "></span>
                        <input type="text" class="form-control " name="jumlah_guru" placeholder="50">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Kepala Sekolah *</label>
                        <span class="lnr "></span>
                        <input type="text" class="form-control " name="kepala_sekolah" placeholder="Pak Siapa">
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for="">Akreditasi *</label>
                    <span class="lnr "></span>
                    <input type="text" class="form-control " name="akreditasi" value="<?= set_value('akreditasi'); ?>" placeholder="A">
                </div>
                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="">Latitude</label>
                        <span class="lnr "></span>
                        <input type="text" class="form-control " name="latitude" placeholder="-9.9999999">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Longitude *</label>
                        <span class="lnr "></span>
                        <input type="text" class="form-control " name="longitude" placeholder="109.9699999">
                    </div><br>
                </div>
                    <a href="" id = "find-me">Atau chek Lokasi mu</a>
                    <p id = "status"></p>
                    <p id = "map-link" target="_blank"></p>
                <button type="submit" data-text="Go Pemetaan">
                    <span>Register</span>
                </button>
            </form>

        </div>
    </div>

    <script src="<?= base_url(); ?>template/daftar/js/jquery-3.3.1.min.js"></script>

    <!-- DATE-PICKER -->
    <script src="<?= base_url(); ?>template/daftar/vendor/date-picker/js/datepicker.js"></script>
    <script src="<?= base_url(); ?>template/daftar/vendor/date-picker/js/datepicker.en.js"></script>

    <script src="<?= base_url(); ?>template/daftar/js/main.js"></script>
    <script>
        function geoFindMe() {

const status = document.querySelector('#status');
const mapLink = document.querySelector('#map-link');

mapLink.href = '';
mapLink.textContent = '';

function success(position) {
  const latitude  = position.coords.latitude;
  const longitude = position.coords.longitude;

  status.textContent = '';
  mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
  mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
}

function error() {
  status.textContent = 'Unable to retrieve your location';
}

if(!navigator.geolocation) {
  status.textContent = 'Geolocation is not supported by your browser';
} else {
  status.textContent = 'Locating…';
  navigator.geolocation.getCurrentPosition(success, error);
}

}
document.querySelector('#find-me').addEventListener('click', geoFindMe);
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>