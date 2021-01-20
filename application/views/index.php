<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mapping Sekolah</title>
    <link rel="icon" href="<?= base_url() ?>template3/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template3/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template3/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template3/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template3/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template3/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template3/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template3/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template3/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>template3/css/chart.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
        .container {
            width: 80%;
            margin: 20px auto;
        }

        .p {
            text-align: center;
            font-size: 14px;
            padding-top: 140px;
        }
    </style>
</head>

<body>

    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?= base_url('home/index') ?>">
                            <h4 class="text-warning">MAP SCHOOL</h4> <!-- <img src="<?= base_url() ?>template3/img/logo.png" alt="logo"> -->
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item dropdown" id="step-one">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tentang
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= base_url('peta/petauser'); ?>">Peta Sekolah</a>
                                        <a class="dropdown-item" href="<?= base_url('home/chart') ?>">Chart Data sekolah</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown" id="step-one">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Peta
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= base_url('home/useronly'); ?>">Peta Cluster</a>
                                        <a class="dropdown-item" href="<?= base_url('home/chart') ?>">Peta Routing</a>
                                        <a class="dropdown-item" href="<?= base_url('home/chart') ?>">Peta Search</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                <li class="d-none d-lg-block" id="step-two">
                                    <a class="btn_1 text-dark bg-primary" href="<?= base_url('home/register') ?>">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Semua Sekolah Smk Harus Terpetakan</h5>
                            <h2>Semua Sekolah SMK Di Kabupaten Sukabumi Bisa di ketahui penduduk</h2>
                            <p>Sekolah Tempat Mendapatkan Ilmu, Ilmu suatu senjata untuk ke majuan bangsa</p>
                            <a href="<?= base_url('home/login'); ?>" class="btn_1">Liat Map </a>
                            <a href="<?= base_url('home/register1'); ?>" class="btn_2">Daftar mapping sekolahku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h4>Buat Apa <br> Web Pemetaan Ini ?</h4>
                        <p>Mari kita sebar Luaskan informasi mengenai ke adaan <b>Jalan</b> Akses ke sekolah di kabupaten Sukabumi
                        </p><br> <b>Pelosok</b> dan <b>Tidak Terpelosok</b>
                        <a href="<?= base_url() ?>template3/#" class="btn_1">Daftar</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Pelosok</h4>
                            <p>Jalan Pelosok termasuk akses jalan yang sangat jauh menuju ke sekolah dan tidak bisa di
                                lalui oleh kendaraan mobil</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Tidak Terpelosok</h4>
                            <p>Akses Jalan menuju ke sekolah tidak terlalu terjal dan bisa di lalui oleh kendaraan
                                minimal kendaraan beroda dua</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Jadikan Informamsi</h4>
                            <p>Mari Sebar Luaskan informasi mengenai ke adaan sekolah terutama terpelosok</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- upcoming_event part start-->


    <script type="text/javascript" src="<?= base_url() ?>template3/main.js"></script>

    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">

                        <p>Sekolah Baru <i class="mdi mdi-application-settings:"></i><i class="mdi mdi-application-cog:"></i></p>
                        <h2>Beberapa Jalan Ke Sekolah Pelosok</h2>
                    </div>
                </div>
            </div>


            <div class="row">Set have great you male grasses yielding yielding first their to called deep
                abundantly Set have great you male
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="<?= base_url('./template3/img/sekolah/isolasibanjir.jpeg') ?>" class="special_img" alt="">
                        <div class="special_cource_text">
                            <div class="author_rating">
                                <div class="rating">
                                    <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                </div>
                                <a href="" class="btn btn-primary">Liat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="<?= base_url('./template3/img/sekolah/terisolasianak.jpg') ?>" class="special_img" alt="">
                        <div class="special_cource_text">
                            <div class="author_rating">
                                <div class="rating">
                                    <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                </div>
                                <a href="" class="btn btn-primary">Liat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="<?= base_url('./template3/img/sekolah/terisolasijembatan.jpg') ?>" class="special_img" alt="">
                        <div class="special_cource_text">
                            <div class="author_rating">
                                <div class="rating">
                                    <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                    <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                </div>
                                <a href="" class="btn btn-primary">Liat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
        </div>
        </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- learning part start-->
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5 class="text-danger">Apa Yah Map School Itu ?</h5>
                        <h2><span class="text-warning">Map Sekolah</span> Sistem Pemetaan Sekolah</h2>
                        <p>Sistem ini bertujuan untuk memudahkan penduduk yang baru / pendatang mengetahui titik lokasi suatu sekolah meskipun di daerah terpencil
                            Terkusus Daerah Pedalaman Kabupaten Sukabumi, </p>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4>Coordinate Sekolah</h4>
                                    <p>Coordinate detail Lokasi sekolah sangatlah penting untuk di ketahui, Agar kita sebagai penduduk tau di daerah kita ada sekolah yang bagus dan perlu di bantu</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-stamp"></span>
                                    <h4>Best Map School</h4>
                                    <p>Pemetaan lokasi Sekolah di Map School ini di utamakan sekolah yang terpelosok dan perlu Sekolahnya di aktipkan dan di tingkatkan kembali</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="<?= base_url() ?>template3/img/advance_feature_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- learning part end-->

    <!--::review_part start::-->


    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Rekaman Kita</p>
                        <h2>Lokasi Sekolah yang Terpelosok</h2>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-blog">
                    <div class="card">
                        <iframe width="360" height="270" src="https://www.youtube.com/embed/0v3ogV5Y8L4?controls=0">
                        </iframe>
                        <div class="card-body">
                            <a href="#" class="btn_4">SDN MAJUJAYA</a>
                            <a href="blog.html">
                                <h5 class="card-title">Jalan yang sangat terjal untuk memasuki sekolah</h5>
                            </a>
                            <p>Smk Maju jaya yang letaknya tidak ajauh dari daerah pejampangan, yang sangat membutuhkan perhatian dari pendidikan sekolah kurangnya pasilitas KBM</p>
                            <ul>
                                <li> <button style="border:none; background:white"><span class="ti-comments" onclick="myReadMore()" id="myBtn"></span></button>2 Comments</li>
                                <li> <span class="ti-heart"></span>2k Like</li>
                                <div id="mycomments" style="display:none">
                                    <li id="isiComment">Saya berniat mengunjungi kesana</li><br>
                                    <input type="text" id="inputcomment" placeholder="comments..">
                                </div>
                        </div>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
    </section>
    <!--::blog_part end::-->
    <!-- learning part start-->


    <!--::review_part start::-->
    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="<?= base_url() ?> img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="<?= base_url() ?> img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="<?= base_url() ?> img/testimonial_img_2.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="<?= base_url() ?> img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="<?= base_url() ?> img/testimonial_img_3.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="<?= base_url() ?> img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->



    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="<?= base_url() ?>template3/index.html"> <img src="<?= base_url() ?> img/logo.png" alt=""> </a>
                        <p>But when shot real her. Chamber her one visite removal six
                            sending himself boys scot exquisite existend an </p>
                        <p>But when shot real her hamber her </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                        </p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Enter email address' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="<?= base_url() ?>template3/#"> <i class="ti-facebook"></i> </a>
                            <a href="<?= base_url() ?>template3/#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="<?= base_url() ?>template3/#"> <i class="ti-instagram"></i> </a>
                            <a href="<?= base_url() ?>template3/#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                            <p><span> Phone :</span> +2 36 265 (8060)</p>
                            <p><span> Email : </span>info@colorlib.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="<?= base_url() ?>template3/https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- jquery -->
    <script src="<?= base_url() ?> js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?= base_url() ?> js/popper.min.js"></script>
    <!-- bootstrap js -->

    <script src="<?= base_url() ?> js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?= base_url() ?> js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url() ?> js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url() ?> js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="<?= base_url() ?> js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?> js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url() ?> js/slick.min.js"></script>
    <script src="<?= base_url() ?> js/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?> js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="<?= base_url() ?> js/custom.js"></script>



</body>

</html>