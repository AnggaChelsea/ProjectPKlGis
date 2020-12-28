<div class="main-content col-lg" style="margin-top:-500px;">
<table class="table table-hover">
  <div class="sukses" style="width: 100%;"><?= $this->session->flashdata('pesan'); ?></div>
  <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Tambah Sub Menu</a>
  <thead>
    <tr>
      <th scope="col">menu_id</th>
      <th scope="col">title</th>
      <th scope="col">url</th>
      <th scope="col">icon</th>
      <th scope="col">is_active</th>
      <th scope="col">active</th>
      <th scope="col">actoin</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($tps as $key) { ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?= $key['title'] ?></td>
      <td><?= $key['menu_id'] ?></td>
      <td><?= $key['url'] ?></td>
      <td><?= $key['icon'] ?></td>
      <td><?= $key['is_active'] ?></td>
      <td>
        <div class="row">
        <a href="<?php echo base_url() . 'home/hapusaksesmenu/' . $key['id']; ?>" class="btn btn-outline-danger">hapus</a>  
        </div>
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
        <h5 class="modal-title" id="newMenuModal">Tambah SubMenu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= base_url('home/tambahsubmenu') ?>" method="post">

        <div class="form-group">
        <select class="form-control" id="menu_id" name="menu_id" placeholder="menu_id">
          <option value="">Pilih Menu</option>
          <?php foreach ($tps as $key) {?>
            <option value="<?= $key['id'] ?>"><?= $key['menu_id'] ?></option>
          <?php }?>

        </select>
        </div>

        <div class="form-group">
        <input type="text" class="form-control" id="title" name="title" placeholder="nama title">
        </div>

        <div class="form-group">
        <input type="text" class="form-control" id="url" name="url" placeholder="url">
        </div>

        <div class="form-group">
        <input type="text" class="form-control" id="icon" name="icon" placeholder="icon">
        </div>

        <div class="form-group">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="defaultCheck1" checked="">
        <label class="form-check-label" for="is_active">
          Active?
        </label>
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