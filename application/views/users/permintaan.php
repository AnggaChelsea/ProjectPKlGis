

 <div class="main-content" style="margin-top:-70px;">
     <?= $this->session->flashdata('pesan'); ?>

    <div class="navbar-form navbar-right">



    </div>
    <div id="result"></div>
    <br>
    <br>
    <br>
    <form style="float: left;" action="<?= base_url('home/editdata') ?>" method="POST">
        <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Cari Data..."
            autocomplete="off" autofocus="">
        <button class="btn btn-primary" type="submit" name="submit"
            style="position: absolute; margin-top: -40px; margin-left: 220px;">cari</button>
    </form>
    
    <?php echo form_close() ?>

    <br>
   
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" class="text-warning">Dari Sekolah</th>
                <th scope="col">Kecamatan</th>
                <th scope="col"><b>Detail</b></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tps as $key) { ?>
            <tr>
                <td><?= $key['nama_sekolah'] ?></td>
                <td><?= $key['kecamatan'] ?></td>
                <td><a href="<?php echo base_url() . 'home/detailpermintaan/' . $key['npsn']; ?>" class="btn btn-warning"><i
                            class="fa fa-info-circle"></i></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<!-- Modal -->
<?= $this->session->flashdata('pesan'); ?>


</div>
