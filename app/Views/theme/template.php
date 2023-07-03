<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Edubin - LMS Education HTML Template</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= base_url(); ?>/images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/animate.css">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/nice-select.css">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>/css/font-awesome.min.css"> -->

    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/responsive.css">

    <script src="https://use.fontawesome.com/d241ccdcfe.js"></script>


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>

    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <header id="header-part">
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="header-contact">
                            <ul>
                                <li><i class="fa fa-envelope"></i><a href="#">baa@ums.ac.id</a></li>
                                <li><i class="fa fa-phone"></i><span>+6271 717417 ext 1139</span></li>
                            </ul>
                        </div> <!-- header contact -->
                    </div>
                    <div class="col-md-6">
                        <div class="header-right d-flex justify-content-end">
                            <div class="login-register">
                                <ul>
                                    <li><a target="_blank" href="https://myakademik.ums.ac.id">MyAkademik</a></li>
                                </ul>
                            </div>
                        </div> <!-- header right -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->

        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="<?= base_url(); ?>">
                                <img src="<?= base_url(); ?>/images/logo_baa.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto myDIV">
                                    <li class="nav-item">
                                        <a class="<?= $menu == 'beranda' ? 'active' : ''; ?>" href="<?= base_url(); ?>">Beranda</a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="<?= $menu == 'layanan' ? 'active' : ''; ?>" href="/layanan">Layanan Akademik</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?= $menu == 'profil' ? 'active' : ''; ?>" href="#">Profil</a>
                                        <ul class="sub-menu">
                                            <li><a class="<?= $submenu == 'tentang-kami' ? 'active' : ''; ?>" href="#">Tentang Kami</a></li>
                                            <li><a class="<?= $submenu == 'struktur_organisasi' ? 'active' : ''; ?>" href="/profil/struktur_organisasi">Struktur Orgranisasi</a></li>
                                            <li><a class="<?= $submenu == 'program_studi' ? 'active' : ''; ?>" href="/profil/program_studi">Program Studi</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?= $menu == 'dokumen' ? 'active' : ''; ?>" href="#">Dokumen Akademik</a>
                                        <ul class="sub-menu">
                                            <li><a class="<?= $submenu == 'buku-akademik' ? 'active' : ''; ?>" href="/dokumen/buku-akademik">Buku Akademik</a></li>
                                            <li><a class="<?= $submenu == 'kalender-akademik' ? 'active' : ''; ?>" href="/dokumen/kalender-akademik">Kalender Akademik</a></li>
                                            <li><a class="<?= $submenu == 'sk-akademik' ? 'active' : ''; ?>" href="/dokumen/sk-akademik">SK Akademik</a></li>
                                            <li><a class="<?= $submenu == 'jadwal-ujian' ? 'active' : ''; ?>" href="/dokumen/jadwal-ujian">Jadwal Ujian</a></li>
                                            <li><a class="<?= $submenu == 'jurnal-kuliah' ? 'active' : ''; ?>" href="https://baa.ums.ac.id/akademik/data_kaldik/Jurnal-Kuliah.pdf">Jurnal Kuliah</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?= $menu == 'kontak' ? 'active' : ''; ?>" href="/kontak">Kontak</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="right-icon text-right">
                                <ul>
                                    <li><a href="javascript:void(0)" id="search"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
                                </ul>
                            </div>  -->
                            <!-- right icon -->
                        </nav> <!-- nav -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </header>


    <!-- Content -->
    <?= $this->renderSection("isi_konten"); ?>
    <!-- end content -->



    <!--====== FOOTER PART START ======-->

    <footer id="footer-part">
        <div class="footer-top pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Alamat Kantor</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Gedung Induk Siti Walidah - Lantai 2</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-address-book"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Jl. A. Yani Tromol Pos I Kartasura, Pabelan, Kartasura, Sukoharjo 57169, Jawa Tengah, Indonesia</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+6271 717417 ext 1139</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>baa@ums.ac.id</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->

        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright text-md-center text-center pt-15">
                            <p>&copy; Copyrights 2023 Biro Administrasi Akademik UMS. </p>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                            <p>Designed by <span>Pixelcurve</span> </p>
                        </div>
                    </div> -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!--====== BACK TO TP PART ENDS ======-->



    <!--====== jquery js ======-->
    <script src="<?= base_url(); ?>/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- <script src="<?= base_url(); ?>/js/vendor/jquery-1.12.4.min.js"></script> -->

    <!--====== Bootstrap js ======-->
    <script src="<?= base_url(); ?>/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="<?= base_url(); ?>/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?= base_url(); ?>/js/jquery.magnific-popup.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="<?= base_url(); ?>/js/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/js/jquery.counterup.min.js"></script>

    <!--====== Nice Select js ======-->
    <script src="<?= base_url(); ?>/js/jquery.nice-select.min.js"></script>

    <!--====== Nice Number js ======-->
    <script src="<?= base_url(); ?>/js/jquery.nice-number.min.js"></script>

    <!--====== Count Down js ======-->
    <script src="<?= base_url(); ?>/js/jquery.countdown.min.js"></script>

    <!--====== Validator js ======-->
    <script src="<?= base_url(); ?>/js/validator.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="<?= base_url(); ?>/js/ajax-contact.js"></script>

    <!--====== Main js ======-->
    <script src="<?= base_url(); ?>/js/main.js"></script>

    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="<?= base_url(); ?>/js/map-script.js"></script>

    <script>
        // Get the container element
        var btnContainer = document.getElementById("myDIV");

        // Get all buttons with class="btn" inside the container
        var btns = btnContainer.getElementsByClassName("btn");

        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");

                // If there's no active class
                if (current.length > 0) {
                    current[0].className = current[0].className.replace(" active", "");
                }

                // Add the active class to the current/clicked button
                this.className += " active";
            });
        }
    </script>
</body>

</html>