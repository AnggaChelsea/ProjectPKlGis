<div class="main-content" style="margin-top:-500px;">
<table class="table table-hover">
  <div class="sukses" style="width: 100%;"> <?= $this->session->flashdata('message'); ?> </div>
  <a href="<?= base_url('home/tambahroleakses') ?>" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Tambah Role Acces</a>
  <thead>
    <tr>
       <th scope="col">No</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($tps as $key) { ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?= $key['role'] ?></td>
      <td>
         <!-- <a href="<?= base_url('home/role_acces/'). $key['id'] ?>" type="submit" class="btn btn-outline-warning">akses</a> -->
         <a href="<?= base_url('home/role_acces/')?>" class="btn btn-outline-warning">akses</a>
        <a href="" class="btn btn-outline-primary">edit</a>
        <a href="" class="btn btn-outline-danger">hapus</a>
      </td>
    </tr>
    <?php $i++ ?>
  <?php } ?>
  </tbody>
</table>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newRoleModal">Tambah Role Akses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= base_url('home/tambahaksesrole') .$key['id']; ?>" method="post">
          
        <div class="form-group">
        <input type="text" class="form-control" id="role" name="role" placeholder="nama role">
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