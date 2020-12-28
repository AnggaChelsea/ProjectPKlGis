<div class="main-content" style="margin-top:-500px;">
<table class="table table-hover">
  <div class="sukses" style="width: 100%;"> <?= $this->session->flashdata('message'); ?> </div>
  <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Tambah Hak Acces</a>
  <thead>
    <tr>
       <th scope="col">No</th>
      <th scope="col">Menu</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($tps as $key) { ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?= $key['menu'] ?></td>
      <td>
        <a href="" class="btn btn-outline-primary">edit</a>
        <a href="<?php echo base_url() . 'home/hapusakses/' . $key['id']; ?>" class="btn btn-outline-danger">hapus</a>
      </td>
    </tr>
    <?php $i++ ?>
  <?php } ?>
  </tbody>
</table>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModal">Tambah Akses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= base_url('home/tambahakses') ?>" method="post">
        
        <div class="form-group">
        <input type="text" class="form-control" id="menu" name="menu" placeholder="nama Manu">
        </div>
           

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
      </div>
    </div>
  </div>
</div>