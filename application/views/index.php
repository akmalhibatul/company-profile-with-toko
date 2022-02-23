<!-- HOME START-->
<section class="bg-home bg-light d-table w-100" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="title-heading mt-5">
                    <h5 class="sub-title"><?= $setting['sub_judul_atas']; ?></h5>
                    <h2 class="heading text-primary mb-3"><?= $setting['judul']; ?></h2>
                    <p class="para-desc text-muted"><?= $setting['sub_judul_bawah']; ?></p>
                    <div class="mt-4 pt-2">
                        <a href="javascript:void(0)" class="btn btn-primary rounded mb-3 me-3">Hire me</a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <a href="#about" data-scroll-nav="1" class="mouse-icon rounded-pill bg-transparent mouse-down">
        <span class="wheel position-relative d-block mover"></span>
    </a>
</section>
<!--end section-->
<!-- HOME END-->

<!-- About Start -->
<section class="section pb-3 mb-4" id="about">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="section-title mb-0 ms-lg-5 ms-md-3">
                    <h4 class="title text-primary mb-3"><?= $setting['title_about']; ?></h4>
                    <h6 class="designation mb-3"><?= $setting['sub_title_about']; ?></h6>
                    <p class="text-muted"><?= $setting['isi_about']; ?></p>
                    <div class="mt-4">
                        <a href="#product" class="btn btn-primary mouse-down">View Produk</a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-5 col-md-5">
                <div class="about-hero">
                    <img src="<?= base_url('assets/') ?>images/<?= $setting['image_about']; ?>" class="img-fluid mx-auto d-block about-tween position-relative" alt="">
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <section class="section pb-3 mb-4" id="product">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title title-line text-uppercase  pb-4">CAMOII NAYANIKA NUSANTARAYA</h4>
                        <p class="text-muted mx-auto para-desc mb-0">Produk Kami Dapat di Peroleh Dengan Mudah di Marketplace.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row align-items-center">
                <?php foreach ($produk as $p) : ?>
                    <div class="col-lg-9 col-md-9 mt-4 pt-2 mt-sm-0 pt-sm-0 mb-5">
                        <div class="section-title mb-0 ms-lg-5 ms-md-3">
                            <h4 class="title text-primary mb-3"><?= $p['title_produk']; ?></h4>
                            <h6 class="text-muted designation mb-3"><?= $p['sub_title']; ?></h6>
                            <div class="mt-4">
                                <a href="<?= $p['link']; ?>" class="btn btn-primary mouse-down" target="blank">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-3 mb-5">
                        <div class="about-hero">
                            <img src="<?= base_url('assets/') ?>images/produk/<?= $p['image']; ?>" class="img-fluid mx-auto d-block about-tween position-relative" alt="">
                        </div>
                    </div>
                    <!--end col-->
                <?php endforeach; ?>




            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="section pb-3 mb-4" id="dokumentasi">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <div class="titles">
                            <h4 class="title title-line text-uppercase mb-4 pb-4">DOKUMENTASI</h4>
                            <span></span>
                        </div>
                        <p class="text-muted mx-auto para-desc mb-0">Dokumentasi Dari Klien Camoii Nayanika.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>

        <div class="container">
            <!-- Gallary -->
            <div class="row">
                <?php foreach ($galeri as $g) : ?>
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 filter-box branding designing">
                        <div class="item-box portfolio-box rounded shadow bg-white overflow-hidden">
                            <div class="portfolio-box-img position-relative overflow-hidden">
                                <img class="item-container img-fluid mx-auto" src="<?= base_url('assets/') ?>images/galeri/<?= $g['image']; ?>" alt="1" />
                                <div class="overlay-work">
                                    <div class="work-content text-center">
                                        <a href="javascript:void(0)" data-src="<?= base_url('assets/') ?>images/galeri/<?= $g['image']; ?>" data-gallery="myGal" class="text-light work-icon bg-dark d-inline-block rounded-pill mfp-image"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>


            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <div class="text-center">
                        <a href="<?= base_url() ?>page/dokumentasi" class="btn btn-outline-primary">Dokumentasi lainnya <i data-feather="refresh-cw" class="fea icon-sm"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
</section>
<!-- About end -->

<section class="section pb-3 mb-4" id="contact">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="custom-form mb-sm-30">
                    <div class="row">
                        <div class="col-lg-7">
                            <h4 class="title text-primary mb-3">KONTAK KAMI</h4>
                            <p class="text-primary">OFFICE :</p>
                            <p class="text-muted"><?= $setting['alamat']; ?></p>
                            <p>Outlet :</p>
                            <p class="text-muted">Jl.raya</p>
                        </div>
                        <!--end col-->

                        <div class="col-lg-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.4166905454277!2d106.68572392916519!3d-6.307437666727815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e56c1ca08d51%3A0xdcc9e2bfd62949e1!2sRSK%20TANGSEL!5e0!3m2!1sen!2sid!4v1625813632913!5m2!1sen!2sid" width="100%" height="250" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <!--end col-->
                    </div>
                </div>
                <!--end custom-form-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Contact End -->