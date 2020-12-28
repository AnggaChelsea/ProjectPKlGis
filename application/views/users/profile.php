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
        style="color:White; widht:bold; float: right;">
        Daftar Pemetaan
    </button>
    </div>
</div>




<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
               <!--  <form action="<?= base_url('home/input_data') ?>" id="formData" method="post"> -->
                    <?= form_open_multipart('home/input_data'); ?>
                    <div class="form-group">
                        <label for="nama_tps">Coordinate lat & Lng</label>
                        <input style="width: 100%;" type="text" value="" name="nama_tps" class="form-control"
                            required="" placeholder="-83212212, 231122332 " id="nama_tps">
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
                    <div class="form-group">
                        <label for="nama_tps">Nama Dinas</label>
                        <input type="text" value="" name="nama_tps" class="form-control" required=""
                            placeholder="Bappeda" id="nama_tps">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Wilayah</label>
                        <input type="text" value="" name="lokasi" class="form-control" required=""
                            placeholder="Pelabuhanratu" id="lokasi">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" value="" name="kecamatan" class="form-control" required=""
                                placeholder="Pelabuhanratu" id="kecamatan">
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
                <span style="color:red;"> Ambil Data Coordinat sesuai dengan titik yang tepat </span><a
                    href="<?= base_url('home/coordinat') ?>">Get Coordinate</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="btnSavee" onclick="Savee()"
                    data-dismiss="modal">Nanti</button>
            </div>
        </div>
    </div>
</div>