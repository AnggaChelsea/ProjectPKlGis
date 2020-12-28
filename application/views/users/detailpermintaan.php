<div class="main-content" style="margin-top: -410px">
<div class="container">
	<div class="row-mt-3">
		<div class="col-md-6">
			<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="<?= base_url('./template/') . $tps['photo']  ?>" alt="Card image cap">
		  <?= $this->session->flashdata('message'); ?> 
		  <div class="card-body">
		    <h5 class="card-title"><?= $tps['wilayah']; ?></h5>
		    <span class="card-text"><?= $tps['kecamatan']; ?></span>
		    <span class="card-text"><?= $tps['nama_dinas']; ?></span>
		    <br class="card-text"><?= $tps['latitude']; ?>, <?= $tps['longitude']; ?></br>
        <b>Keterangan</b><p></p><?= $tps['keterangan']; ?> <p></p>
		    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Terima save to database</button>

		  </div>
		</div>
		</div>
	</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: blue;">Save Permintaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
   <?= form_open_multipart('home/input_data'); ?>
  <div class="form-group">
    <label for="formGroupExampleInput">Wilayah</label>
    <input type="text" class="form-control" name="wilayah" id="wilayah" value="<?= $tps['wilayah'] ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Kecamatan</label>
    <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= $tps['kecamatan'] ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Nama Dinas</label>
    <input type="text" class="form-control" name="nama_tps" id="nama_tps" value="<?= $tps['nama_dinas'] ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Latitude</label>
    <input type="text" class="form-control" name="latitude" id="latitude" value="<?= $tps['latitude'] ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Longitude</label>
    <input type="text" class="form-control" name="longitude" id="longitude" value="<?= $tps['longitude'] ?>">
  </div>
   <input type="file" value="" name="photo" class="form-control" required="" hidden="">
  <img src="<?= base_url('./template/') . $tps['photo']  ?>" style="width: 140px; height: 130px"  name="photo">

  <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?= form_close(); ?>
      </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>


