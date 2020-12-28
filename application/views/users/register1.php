

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RegistrationForm_v9 by Colorlib</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- LINEARICONS -->
        <link rel="stylesheet" href="<?= base_url(); ?>template/daftar/fonts/linearicons/style.css">

        <!-- MATERIAL DESIGN ICONIC FONT -->
        <link rel="stylesheet" href="<?= base_url(); ?>template/daftar/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

        <!-- DATE-PICKER -->
        <link rel="stylesheet" href="<?= base_url(); ?>template/daftar/vendor/date-picker/css/datepicker.min.css">
        
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>template/daftar/css/style.css"> 
        <link rel="stylesheet" href="<?= base_url(); ?>template/daftar/css/style.scss">    

    </head>

    <body>

        <div class="wrapper">
            <div class="inner">
                <form action="<?= base_url('home/registration'); ?>" method="POST">
                    <h3>Pemetaan Kegiatan</h3>
                    
                    <div class="form-row">
                        <div class="form-wrapper">
                            <label for="">Nama *</label>
                            <span class="lnr "></span>
                            <input type="text" class="form-control " name="nama" value="<?= set_value('nama'); ?>" placeholder="Exaulia..">
                             <span style="color: red;"><?= form_error('nama', '<span class="text-danger pl-3">', '<span>'); ?></span>
                        </div>
                        <div class="form-wrapper">
                            <label for="">Dinas *</label>
                            <span class="lnr "></span>
                            <input type="text" class="form-control " name="dinas" value="<?= set_value('dinas'); ?>" placeholder="experhutanan">
                        </div>

                    </div>


                    <div class="form-row">
                        <div class="form-wrapper">
                            <label for="">Email *</label>
                            <span class="lnr "></span>
                            <input type="text" class="form-control " name="email" value="<?= set_value('email'); ?>" placeholder="example@gmail.com">
                        </div>
                        <span style="color: red;"><?= form_error('email', '<span class="text-danger pl-3">', '<span>'); ?></span>
                        <div class="form-wrapper">
                            <label for="">phone *</label>
                            <span class="lnr "></span>
                            <input type="text" class="form-control " name="phone" value="<?= set_value('phone'); ?>" placeholder="+6285724+++++++">
                            <span style="color: red;"><?= form_error('phone', '<span class="text-danger pl-3">', '<span>'); ?></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-wrapper">
                            <label for="">password *</label>
                            <span class="lnr "></span>
                            <input type="password" class="form-control " name="password1" placeholder="*********">
                        </div>
                        <div class="form-wrapper">
                            <label for="">ulangi password  *</label>
                            <span class="lnr "></span>
                            <input type="password" class="form-control " name="password2" placeholder="*********">
                        </div>
                    </div>
                   
                   
                    <button type="submit" data-text="Go Pemetaan">
                        <span>Register</span>
                    </button>
                </form>
            </div>
        </div>
        
        <script src="<?= base_url(); ?>template/daftar/js/jquery-3.3.1.min.js"></script>

        <!-- DATE-PICKER -->
        <script src="<?= base_url(); ?>template/daftar/vendor/date-picker/js/datepicker.js"></script>
        <script src="<?= base_url(); ?>template/daftar/vendor/date-picker/js/datepicker.en.js"></script>

        <script src="<?= base_url(); ?>template/daftar/js/main.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>