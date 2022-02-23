<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from shreethemes.in/cristino/layouts/page-portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 11:54:13 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Camoii Nayanika | Dokumentasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Shreethemes" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/icon.png">
    <!-- Bootstrap -->
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- MK Lightbox -->
    <link href="<?= base_url('assets/') ?>css/mklb.css" rel="stylesheet" type="text/css" />
    <!-- SLICK SLIDER -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/tiny-slider.css" />
    <!-- Icon -->
    <link href="<?= base_url('assets/') ?>css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom Css -->
    <link href="<?= base_url('assets/') ?>css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="<?= base_url('assets/') ?>css/colors/default.css" rel="stylesheet" id="color-opt">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="20">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="logo">
                <img src="<?= base_url('assets/') ?>images/Logo New CNN.png" height="80" class="d-block mx-auto" alt="">
            </div>
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navbar Start -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/') ?>images/<?= $setting['image_logo']; ?>" height="80" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span data-feather="menu" class="fea icon-md"></span>
            </button>
            <!--end button-->

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul id="navbar-navlist" class="navbar-nav navbar-nav-link mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url() ?>page/">Home</a>
                    </li>
                    <!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>page/">Product</a>
                    </li>
                    <!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>page/">Dokumentasi</a>
                    </li>
                    <!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <!--end nav item-->
                </ul>
            </div>
        </div>
        <!--end container-->
    </nav>
    <!--end navbar-->
    <!-- Navbar End -->

    <!-- Home Start -->
    <section class="bg-half d-table w-100" style="background: url('<?= base_url('assets/') ?>images/home/bg-pages.jpg')center center;">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> Dokumentasi </h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Home End -->

    <!-- Projects End -->
    <section class="section">
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

            <center><?php echo $this->pagination->create_links(); ?></center>
        </div>

        <!--end container-->

    </section>
    <!--end section-->
    <section class="section pb-3 mb-4" id="contact">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="custom-form mb-sm-30">
                        <div class="row">
                            <div class="col-lg-7">
                                <h4 class="title text-primary mb-3">KONTAK KAMI</h4>
                                <p class="text-primary">OFFICE :</p>
                                <p class="text-muted">Rawa Mekar Jaya, Serpong Sub-District,<br>South Tangerang City, Banten 15310</p>
                                <p>Outlet :</p>
                                <p class="text-muted">Jl.raya</p>
                            </div>
                            <!--end col-->

                            <div class="col-lg-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.4166905454277!2d106.68572392916519!3d-6.307437666727815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e56c1ca08d51%3A0xdcc9e2bfd62949e1!2sRSK%20TANGSEL!5e0!3m2!1sen!2sid!4v1625813632913!5m2!1sen!2sid" width="400" height="250" style="border:3px;" allowfullscreen="" loading="lazy"></iframe>
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

    <!-- Footer Start -->
    <footer class="footer bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="#"><img src="<?= base_url('assets/') ?>images/<?= $setting['image_footer']; ?>" height="80" alt=""></a>
                    <p class="para-desc mt-2"><?= $setting['isi_footer']; ?></p>

                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <footer class="footer footer-bar bg-dark">
        <div class="container text-foot">
            <p>Copyright © <script>
                    document.write(new Date().getFullYear())
                </script> Camoii Nayanika Nusantaraya.</p>
            <ul class="list-unstyled mb-0 mt-2 mt-sm-0 social-icon  justify-content-right">
                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram"></i></a></li>
            </ul>

        </div>
        <!--end container-->

    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" class="back-to-top rounded text-center" id="back-to-top">
        <i class="mdi mdi-chevron-up d-block"> </i>
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
    <!-- SLIDER -->
    <script src="<?= base_url('assets/') ?>js/tiny-slider.js"></script>
    <script src="<?= base_url('assets/') ?>js/tiny-slider-init.js"></script>
    <!-- MK Lightbox -->
    <script src="<?= base_url('assets/') ?>js/mklb.js"></script>
    <script src="<?= base_url('assets/') ?>js/filter.init.js"></script>
    <!-- Feather icon -->
    <script src="<?= base_url('assets/') ?>js/feather.min.js"></script>
    <!-- Switcher -->
    <script src="<?= base_url('assets/') ?>js/switcher.js"></script>
    <!-- Main Js -->
    <script src="<?= base_url('assets/') ?>js/app.js"></script>
</body>


<!-- Mirrored from shreethemes.in/cristino/layouts/page-portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 11:54:13 GMT -->

</html>