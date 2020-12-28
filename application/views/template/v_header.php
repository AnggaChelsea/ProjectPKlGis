<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>

                    </ul>
                    <div class="search-element">
                        <div class="search-backdrop"></div>
                        <div class="search-result">
                            <div class="search-header">
                                Bekas Pencarian
                            </div>
                            <div class="search-item">
                                <a href="#">Alamat Lengkap Bappeda</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-item">
                                <a href="#">Jadwal Terbaru</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-item">
                                <a href="#">Perubahan Terbaru</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-header">
                                Pencarian
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30"
                                        src="<?= base_url() ?>template/assets/img/products/product-3-50.png"
                                        alt="product">
                                    Alat Komunikasi
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30"
                                        src="<?= base_url() ?>template/assets/img/products/product-2-50.png"
                                        alt="product">
                                    Jaringan
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30"
                                        src="<?= base_url() ?>template/assets/img/products/product-1-50.png"
                                        alt="product">
                                    Kenyamanan
                                </a>
                            </div>
                            <div class="search-header">
                                Program
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <div class="search-icon bg-danger text-white mr-3">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    Web Pemetaan Daerah
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <div class="search-icon bg-primary text-white mr-3">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    Membuat web hadir Pekerja
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                   

                   
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url('template/assets/img/profile/') . $user['image']  ?>"
                                class="
                                rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block"><b> Saya </b>( <?= $user['nama']; ?> )</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="<?= base_url('home/profile') ?>" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('home/editprofile') ?>" class="dropdown-item has-icon ">
                                <i class="fa fa-code"></i>Upadte Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('home/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i>Keluar
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>