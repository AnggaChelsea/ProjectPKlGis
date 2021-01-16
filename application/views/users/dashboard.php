<div class="main-content" style="margin-top:-450px;">
<form  action="<?= base_url('home/editdata') ?>" method="POST">
        <input type="text" style="width: 100%;" name="keyword" id="keyword" class="form-control container" placeholder="Cari User..."
            autocomplete="off" autofocus="">
        <!-- <button class="btn btn-primary" type="submit" name="submit"
            style="position: absolute; margin-top: -40px; margin-left: 220px;">cari</button> -->
    </form>
<br><br>
<div class="container-fluid">
  <div class="px-lg-5">

    <!-- For demo purpose -->
    
    <!-- End -->

    <div class="row">
    <?php foreach ($anjay as $key) { ?>
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="<?= $key['image'] ?>" alt="" class="img-fluid card-img-top" height="60">
          <div class="p-4">
            <h5> <a href="#" class="text-dark"><?= $key['nama'] ?></a></h5>
            <p class="small  mb-0 text-warning">Nama Sekolah <br> <?= $key['sekolah']?></p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">
              </span></p>
              <div class="badge badge-dark px-3 rounded-pill font-weight-normal">
              <a class="text-success">Send Message</a></div>
            </div>
          </div>
        </div>
      </div>
     <?php } ?>

    </div>
   
  </div>
</div>


</div>