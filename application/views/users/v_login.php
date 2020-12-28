<div class="main-content" style="margin-top:-520px;">


    <body class="bg-gradient-primary">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-lg-7">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">

                                <div class="col-lg">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Halaman Login!</h1>
                                            <!---dibawah in i saya memasukan session saat register succes lalu akan timbul alert ini
                                            bisa di liat di controller home--->
                                            <div class="exit" onclick="exit();">
                                                <?= $this->session->flashdata('message'); ?>
                                            </div>
                                        </div>
                                        <!-- <form class="user" method="POST" action="<?= base_url('home/login'); ?>"> -->
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" id="email"
                                                    aria-describedby="emailHelp" name="email"
                                                    placeholder="Masukan Email..." value="<?= set_value('email'); ?>">
                                                <?= form_error('email', '<span class="text-danger pl-3">', '<span>'); ?>
                                            </div>
                                            <div class="form-group">
                                            <?= form_error('password', '<span class="text-danger pl-3" style="font-size:10px;">', '<span>'); ?>
                                                <input type="password" class="form-control form-control-user"
                                                    id="password" name="password" placeholder="Password">
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>

                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url('home/registration') ?>">Create an
                                                Account!</a>
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
<script>
function exit() {
    const rem = document.querySelectorAll('.exit');
    rem.style.display = 'none';

}
</script>