<div class="main-content" style="margin-top:-450px;">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
<div class="sukses" style="width: 100%;"> <?= $this->session->flashdata('message'); ?> </div>
            <div class="col-md-4">
                <img src="<?= base_url('template/assets/img/profile/') . $user['image']  ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama']; ?></h5>
                    <p class="card-text"><?= $user['email'] ?></p>
                    <p class="card-text" ><small class="text-muted" style="color:blue;">Member Sejak
                            <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#newMenuModal" onclick="add()"
        style="color:White; float: right;">
        Lengkapi Data
    </button>
    </div>
</div>




<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
               
                    <?= form_open_multipart('home/input_data'); ?>
                    <div class="form-group">
                        <label for="nama_sekolah">NPSN</label>
                        <input style="width: 100%;" minlength="8" maxlength="8" type="text" value="" name="nama_sekolah" class="form-control"
                            required="" placeholder="83212212" id="demo">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Nama Sekolah</label>
                        <input type="text" value="" name="nama_sekolah" class="form-control" required=""
                            placeholder="Bappeda" id="nama_sekolah">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="latitude">Latitude</label>
                            <input type="text" value="" name="latitude" class="form-control" required=""
                                placeholder="-83212212" id="latitude">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="longitude">Longitude</label>
                            <input type="text" value="" name="longitude" class="form-control" required=""
                                placeholder="231122332" id="longitude">
                        </div>
                    </div>
                    <a class="btn btn-outline-success" id="koordinatku" onclick="getLocation()">Koordinate saya</a><br>
                    <p id="demo"></p>
                    <p class="text=danger" id="status"></p>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" value="" name="alamat" class="form-control" required=""
                            placeholder="Bappeda" id="alamat">
                    </div>
                    <div class="form-group">
                        <label for="desa">Wilayah</label>
                        <input type="text" value="" name="desa" class="form-control" required=""
                            placeholder="Pelabuhanratu" id="desa">
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" value="" name="kecamatan" class="form-control" required=""
                                placeholder="Pelabuhanratu" id="kecamatan">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="jumlah_siswa">jumlah_siswa</label>
                            <input type="text" value="" name="jumlah_siswa" class="form-control" required=""
                                placeholder="200" id="jumlah_siswa">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jumlah_guru">jumlah_guru</label>
                            <input type="text" value="" name="jumlah_guru" class="form-control" required=""
                                placeholder="0000" id="jumlah_guru">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="kepala_sekolah">kepala_sekolah</label>
                            <input type="text" value="" name="kepala_sekolah" class="form-control" required=""
                                placeholder="Pelabuhanratu" id="kepala_sekolah">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="kecamatan">Kreditasi</label>
                            <select name="akreditasi" id="">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group col-md-6">
                            <input class="form-check-input" type="file" name="photo" id="gridCheck">
                        </div>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Benar
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                <!-- </form> -->
                 <?= form_close(); ?>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span style="color:red;"> Ambil Data Coordinat sesuai dengan titik anda </span>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="btnSavee" onclick="Savee()"
                    data-dismiss="modal">Nanti</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
           function getLocation(){
               const status = document.getElementById('status');
               const demo = document.getElementById('demo');

               demo.href = '';
               demo.textContent = '';
            }

            function success(position){
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;

                status.textContent = '';
                demo.href = `https://google.maps/${latitiude}/${longitude}`;
                demo.textContent = `latitude : ${latitude}, longitude ${longitude}`;
            }

            function error(){
                status.textContent = 'map tidak terdeteksi karna jaringan memungkinka tidak bersahabat';

            }
            if(!navigator.geolocation){
                status.textContent = 'geolocation tidak support di mobile or desktop anda';
            }
            else{
                status.textContent = 'detek lokasimu ......'
                navigator.geolocatoin.getCurrentPosition(success, error);
            }

            document.getElementById('koordinatku').addEventListener('click', geoFindMe)
</script>