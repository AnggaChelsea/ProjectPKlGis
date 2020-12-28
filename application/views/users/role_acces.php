<div class="main-content" style="margin-top:-500px;">
  <h5>Role : <?= $key['role_id']; ?></h5>
<table class="table table-hover">
  <thead>
    <tr>
       <th scope="col">No</th>
      <th scope="col">Menu</th>
      <th scope="col">Access</th>
    </tr>
  </thead>
  <tbody>
   <?php $i = 1; ?>
    <?php foreach($tps as $key) { ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?= $key['menu'] ?></td>
      <td>
         <input type="checkbox" class="form-check-input" id="exampleCheck1">
      </td>
    </tr>
    <?php $i++ ?>
  <?php } ?>
  </tbody>
</table>
</div>

