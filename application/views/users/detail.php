<div class="main-content" style="margin-top: -410px">
<div class="container">
	<div class="row-mt-3">
		<div class="col-md-6">
			<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="<?= base_url('./template/') . $tps['photo']  ?>" alt="Card image cap">
		  <?= $this->session->flashdata('message'); ?> 
		  <div class="card-body">
		  	<span class="card-text text-warning">kode dinas <b><?= $tps['kode_tps']; ?></b></span>
		    <h5 class="card-title"><?= $tps['wilayah']; ?></h5>
		    <span class="card-text"><?= $tps['kecamatan']; ?></span>
		    <span class="card-text"><?= $tps['nama_tps']; ?></span>
		    <span class="card-text"><?= $tps['lokasi']; ?></span>
		    <br class="card-text"><?= $tps['latitude']; ?>, <?= $tps['longitude']; ?></br>
		    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Update</button>
		  </div>
		</div>
		</div>
	</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: blue;">Edit Data Peta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
  <?= form_open_multipart('home/editmap'); ?>
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
    <input type="text" class="form-control" name="nama_tps" id="nama_tps" value="<?= $tps['nama_tps'] ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Latitude</label>
    <input type="text" class="form-control" name="latitude" id="latitude" value="<?= $tps['latitude'] ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Longitude</label>
    <input type="text" class="form-control" name="longitude" id="longitude" value="<?= $tps['longitude'] ?>">
  </div>

<!-- <div class="md-form">
 <div class="file-field">
    <div class="btn btn-warning btn-sm float-left">
      <span>Choose file</span>
      <input type="file" name="input_gambar">
    </div>
    <div class="file-path-wrapper">
      <div class="file-path validate">
    </div>
  </div>
</div><p></p><br> -->
  

  <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan dan update</button>
      </div>
 <?= form_close();?>
      </div>
      
    </div>
  </div>
</div>
</div>

</div>


