<div class="main-content" style="margin-top:-520px;">

    <div class="container">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="card o-hidden border-0 shadow-lg my-5 bg-light">
                <div class="row">
                    <div class="col-lg">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Daftar</h1>
                                </div>
                                <form class="user" action="<?= base_url('home/registration'); ?>" method="POST">
                                    <div class="form-group">
                                        <input style="color: blue;" type="text" class="form-control form-control-user"
                                            name="nama" autocomplete="off" placeholder="Nama" id="nama"
                                            value="<?= set_value('nama'); ?>">
                                        <?= form_error('nama', '<span class="text-danger pl-3">', '<span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input style="color: blue;" type="text" class="form-control form-control-user"
                                            name="dinas" autocomplete="off" placeholder="Nama Dinas"
                                            value="<?= set_value('dinas'); ?>" id="dinas">
                                        <?= form_error('dinas', '<span class="text-danger pl-3">', '<span>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <input style="color: blue;" type="email" class="form-control form-control-user"
                                            id="email" name="email" autocomplete="off" placeholder="Email Address"
                                            value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<span class="text-danger pl-3">', '<span>'); ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input style="color: blue;" type="password"
                                                class="form-control form-control-user" id="password1" name="password1"
                                                autocomplete="off" placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <input style="color: blue;" type="password"
                                                class="form-control form-control-user" id="password2" name="password2"
                                                autocomplete="off" placeholder="Repeat Password">
                                            <span
                                                style="color: red;"><?= form_error('password2', '<span class="text-danger pl-3">', '<span>'); ?></span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark text-center" style="text-align: center;">
                                        Daftarkan
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('home/login') ?>">Already have
                                        an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>