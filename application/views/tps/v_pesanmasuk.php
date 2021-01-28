<div class="main-content" style="margin-top:-70px;">

<div class="container">


<div class="row-2">
<?php foreach($pesanku as $key) {?>
<div class="card text-white bg-primary mb-3 " style="max-width: 18rem;">
  <div class="card-header">Dari&nbsp;<span style="color:yellow;"><b><?= $key['name'] ?> &nbsp; (<?= $key['email'] ?>)</b></span><br></div>
  <div class="card-body">
  <h5 class="card-title">&nbsp; <?= $key['subject'] ?></h5>
  
    <p class="card-text"><?= $key['pertanyaan'] ?></p>
  </div>
</div>
<?php }?>
</div>
</div>