<div class="main-content" style="margin-top:-500px;">

<?= form_open_multipart('home/editprofile'); ?>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="<?= $user['email']; ?>" disabled>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="<?= $user['nama']; ?>">
    <?= form_error('email', '<span class="text-danger pl-3">', '<span>'); ?>
  </div>
  <div class="form-group">
   <div class="col-sm-2">gambar</div>
   <div class="col-sm-10">
   	<div class="row">
   		<div class="col-sm-3">
   			<img src="<?= base_url('template/assets/img/profile/') . $user['image']  ?>" class="img-thumbnail">
   		</div>
   		<div class="col-sm-9">
   			<div class="custom-file">
		  <input type="file" class="custom-file-input" id="image">
		  <label class="custom-file-label" name="image" for="image">Pilih</label>
		</div>
   		</div>
   	</div>
   </div>
  </div>
  <div class="form-group row">
  	<div class="col-sm-10">
  		<button type="submit" class="btn btn-primary">save</button>
  	</div>
  </div>
</div>
<script type="text/javascript">
        $('.custom-file-input').on('change', function(){
            let filename = $($this).val().split('\\').pop();
            $($this).next('.custom-file-label').addClass('selected').html(filename)
        });
    </script>