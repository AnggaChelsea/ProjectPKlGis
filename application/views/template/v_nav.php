
<div class="main-sidebar sidebar-style-2" style="margin-top:-10px;">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Pemetaan Sekolah</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">M'B</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header" style="text-align:center; color:green;">
                <img src="https://cdn1-production-images-kly.akamaized.net/Kt-lmOFAbnWk1Hd-M3eTeT5io0E=/640x480/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1658477/original/069760900_1500971383-Banner_Infografis_Jorban_Salah_Sebut_Gedung_Putih_banner.jpg" widht="30px" height="40px" alt=""
                    style="margin-top:-10px;">
            </li>
          
            


            <!----disini saya akan memanggil / query nav dari database
                  dengan menjoinkan beberapa database  --->

            <!---masukan kedalam variable-->

            <?php
            //role ini ngambil dari session userdata yang ada di home controller ngambil saat session login

            $role_id = $this->session->userdata('role_id');


            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                                FROM `user_menu`JOIN `user_access_menu` 
                                ON `user_menu`. `id` = `user_access_menu`. `menu_id`
                                WHERE `user_access_menu`. `role_id` = $role_id
                                ORDER BY `user_access_menu`. `menu_id` ASC
                                ";

            $menu = $this->db->query($queryMenu)->result_array();
            // var_dump($menu);
            // die;

            ?>


            <!----LOOOPING MENU--->

            <?php foreach ($menu as $m) : ?>


            <!---LOOPING SUBMENU SESUAI SUB MENU--->
            <!-- QUERY SUB MENU -->
            <?php

                $menuId = $m['id'];
                $querySubmenu = "SELECT *
                                FROM `user_sub_menu` JOIN `user_menu` 
                                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                            WHERE `user_sub_menu`.`menu_id` = $menuId
                            AND `user_sub_menu`.`is_active` = 1
                            ";
                $subMenu = $this->db->query($querySubmenu)->result_array();
                ?>

            <!-- looping sub menu  -->
            <?php foreach ($subMenu as $sm) : ?>
                <tr>
            <?php if ($title == $sm['title']) : ?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif; ?>
                <!---dan untuk looping ini saya ngambil dari database-->
                <a class="nav-link pb" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?> "></i>
                    <span class="font-weight-normal"><?= $sm['title'] ?></span></a>
            </li>
            <?php endforeach; ?>
              <hr class="sidebar-divider mt-3">
            <?php endforeach; ?>


    </aside>
</div>
</div>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>

        </div>

        <div class="section-body">
        </div>
    </section>
</div>
</div>