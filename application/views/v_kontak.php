<div class="main-content" style="margin-top:-450px;">
    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Kami</h2>
        <!--Section description-->
        <p class="h3-responsive text-center w-responsive mx-auto mb-5">Apakah Ada yang ingin di tanyakan mengenai System
            Pemetaan Kegiatan ini</p>

        <div class="row">
            <?= $this->session->flashdata('message'); ?>

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form action="<?= base_url('home/input_pesan') ?>" id="formData" method="post">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Nama Dinas</label>
                                <input type="text" id="name" value="" name="name" class="form-control"
                                    autocomplete="off">
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Email</label>
                                <input type="text" id="email" value="" name="email" class="form-control"
                                    autocomplete="off">
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Subject</label>
                                <input type="text" id="subject" value="" name="subject" class="form-control"
                                    autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <label for="message">Pertanyaan</label>
                                <textarea type="text" id="message" value="" name="pertanyaan" rows="2"
                                    class="form-control md-textarea"></textarea>
                            </div>

                        </div>
                    </div>
                    <br>
                    <!--Grid row-->
                    <button class="btn btn-primary">Kirim</button>

                </form>

                <!-- <div class="text-center text-md-left">
                <a class="btn btn-primary" style="color:white;" onclick="document.getElementById('contact-form').submit();">Kirim</a>
            </div> -->
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x" style="color:blue;"></i>
                        <p>Kantor Bappeda</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x" style="color:blue;"></i>
                        <p>+ 62 857 ++++++</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x" style="color:blue;"></i>
                        <p>contact@me.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->

</div>