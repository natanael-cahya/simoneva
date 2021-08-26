<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SIMONEVA 5S</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url('assets/template/back/img') ?>/logo.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body::-webkit-scrollbar {
            width: 7px;
        }

        body::-webkit-scrollbar-track {
            background-color: white;
        }

        body::-webkit-scrollbar-thumb {
            background-color: #F9B368;
        }

        .btn-5s {
            background-color: #F5AA1F;

            color: white;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top" style="color: black;"><img src="<?= base_url('assets/template/back/img') ?>/logo.png" width="50" height="50"> SIMONEVA 5S</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: black;" href="#page-top"> <i class="fa fa-home"></i> Beranda</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: black;" href="#about"><i class="fa fa-info-circle"></i> Tentang 5S</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: black;" href="#services"><i class="fa fa-location-arrow"></i> Tujuan 5S</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: black;" href="#portfolio"><i class="fa fa-image"></i> Dokumentasi 5S</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: black;" href="#area"><i class="fa fa-book"></i> Struktur Area & POB 5S</a></li>
                    <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: black;" href="#pob">POB 5S</a></li> -->
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: black;" href="#contact"><i class="fa fa-phone"></i> Kontak Kami</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100 animate__animated animate__fadeInDown ">
            <div class="row h-100 align-items-center justify-content-center ">
                <div class="col-lg-12 align-self-end">
                    <h1 class="text-uppercase font-weight-bolder judul"><b>SIMONEVA 5S</b> </h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-12 align-self-baseline">
                    <p class=" font-weight-light mb-5 animate__animated animate__delay-2s animate__fadeIn" style="font-family: poppins;"> Aplikasi yang ditujukan untuk Sosialisasi , Monitoring , Implementasi , <br>Dan Evaluasi seputar 5S </p>
                    <div class="text-center">
                        <a class="btn btn-primary btn-xl tombol js-scroll-trigger animate__animated animate__delay-1s animate__fadeInUp" href="#about">Pengertian Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <center>
                        <h2 class="text-white mt-0" data-aos="zoom-in">Apa si SIMONEVA 5S?</h2>

                        <hr class="divider light my-4" data-aos="fade-right" />
                        <p class="text-white-50 mb-4" data-aos="fade-up" data-aos-duration="1000"> <?php

                                                                                                    foreach ($tentang as $t) :

                                                                                                        if ($t->status_tentang == "1") {
                                                                                                    ?>
                                    <!--<b style="font-size: 30px;"><?= $t->judul_tentang_5s ?></b><br>-->
                                    <?= $t->isi_tentang_5s; ?><BR><br>


                            <?php
                                                                                                        }
                                                                                                    endforeach;  ?>
                        </p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" data-aos="fade-up" href="#services">Harapan Simoneva 5S</a>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section2" id="services">
        <div class="container">
            <center>
                <h2 class=" mt-0" data-aos="zoom-in">Tujuan S5</h2>
            </center>
            <hr class="divider2 my-4" data-aos="fade-left" />

            <div class="row">

                <div class="accordion col-lg-6" id="accordionExample">


                    <div class="mt-5 ">
                        <center>
                            <span data-aos="fade-down" data-aos-duration="1000"> <i class="fas fa-4x fa-book text-primary mb-4"></i></span>
                            <h3 class="h4 mb-2" data-aos="fade-up">Kebijakan 5s</h3>
                        </center>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-block btn-5s btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <center>Klik untuk melihat detail</center>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <h5>
                                    Dalam rangka membudayakan 5S <br>di lingkungan PT PJB UBJ O&M PLTU Paiton, Manajemen menetapkan kebijakan sebagai berikut:
                                </h5>
                                <hr>
                                <?php
                                $i = 1;
                                foreach ($kebijakan as $k) :

                                    if ($k->status == "1") {



                                ?>

                                        <?= $i++; ?>. <?= $k->isi_kebijakan_5s; ?><BR><br>

                                <?php

                                    }
                                endforeach;  ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="accordion col-lg-6" id="accordionExample">
                    <div class="mt-5 ">
                        <center>
                            <span data-aos="fade-down" data-aos-duration="1000"> <i class="fas fa-4x fa-handshake text-primary mb-4"></i></span>
                            <h3 class="h4 mb-2" data-aos="fade-up">Komitmen 5s</h3>
                        </center>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-block btn-link btn-5s collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <center>Klik untuk melihat detail</center>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <h5>
                                    Kami Manajemen beserta seluruh Karyawan berjanji:
                                </h5>
                                <hr>
                                <?php
                                $i = 1;
                                foreach ($komitmen as $km) :

                                    if ($km->status == "1") {



                                ?>

                                        <?= $i++; ?>. <?= $km->isi_komitmen_5s; ?><BR><br>

                                <?php

                                    }
                                endforeach;  ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <span data-aos="fade-down" data-aos-duration="1000"> <i class="fas fa-4x fa-industry text-primary mb-4"></i></span>
                        <h3 class="h4 mb-2" data-aos="fade-up">Neighborhood</h3>
                        <span>
                            <p class="text-muted mb-0" data-aos="fade-down" data-aos-duration="1500">Membuat Lingkungan yang bersih dan teratur</p>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <span data-aos="fade-down" data-aos-duration="1000"><i class="fab fa-4x fa-resolving text-primary mb-4" data-aos="fade-down" data-aos-duration="2000"></i></span>
                        <h3 class="h4 mb-2" data-aos="fade-up">Problem Solving</h3>
                        <span data-aos="fade-down" data-aos-duration="2000">
                            <p class="text-muted mb-0" data-aos="fade-down" data-aos-duration="1500">Menjadi solusi dari suatu masalah yang sering Terabaikan.</p>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <span data-aos="fade-down" data-aos-duration="1000"><i class="fas fa-4x fa-hard-hat text-primary mb-4" data-aos="fade-down" data-aos-duration="3000"></i></span>
                        <h3 class="h4 mb-2" data-aos="fade-up">Motto & Consistent</h3>
                        <span data-aos="fade-down" data-aos-duration="2000">
                            <p class="text-muted mb-0" data-aos="fade-down" data-aos-duration="1500">Lingkungan kerja yang bersih dan rapi menjadi Motto!</p>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <span data-aos="fade-down" data-aos-duration="1000"><i class="fas fa-4x fa-people-carry text-primary mb-4" data-aos="fade-down" data-aos-duration="4000"></i></span>
                        <h3 class="h4 mb-2" data-aos="fade-up">Responsible</h3>
                        <span data-aos="fade-down" data-aos-duration="2000">
                            <p class="text-muted mb-0" data-aos="fade-down" data-aos-duration="1500">Penyadaran Etika kerja yang disiplin , saling menghormati , menjaga serta senang dalam melakukan perbaikan </p>
                        </span>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <section class="page-section" id="portfolio" data-aos="fade-up">

        <div class="container-fluid p-0">
            <center>
                <h2 class=" mt-0" data-aos="zoom-in">DOKUMENTASI</h2>
            </center>
            <hr class="divider2 my-4" data-aos="fade-right" />
            <div class="row no-gutters">

                <?php
                $i = 1;
                foreach ($dokumentasi as $d) :

                    if ($d->status == "1") {



                ?>




                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="<?= base_url('upload_img/lp/' . $d->foto); ?>">
                                <img class="img-fluid" src="<?= base_url('upload_img/lp/' . $d->foto); ?>" alt="" style="  height: 400px; width: 100%;" />
                                <div class="portfolio-box-caption">
                                    <!-- <div class="project-category text-white-50">Category</div> -->
                                    <div class="project-name"> <?= $d->judul; ?></div>
                                </div>
                            </a>
                        </div>


                <?php

                    }
                endforeach;  ?>

            </div>
    </section>


    <!-- STRUKTUR 5S AREA -->
    <!-- Portfolio-->
    <section class="page-section4" id="area">
        <div class="container-fluid p-0">
            <center>
                <h2 class=" mt-0" data-aos="zoom-in">STRUKTUR AREA & POB 5S </h2>
            </center>
            <hr class="divider2 my-4" data-aos="fade-left" />
            <div class="row no-gutters ">

                <?php
                $i = 1;
                foreach ($struktur as $s) :
                ?><div class="col-lg-5" style="margin: auto;">
                        <form method="GET" action="<?= base_url('upload_file/struktur_area/' . $s->berkas); ?>">
                            <button class="btn btn-5s btn-lg btn-block text-white "><i class="fas fa-download"></i> Struktur Area 5S</button>
                        </form>
                    </div>
                <?php $i++;
                endforeach;  ?>
                <?php
                $i = 1;
                foreach ($pob as $p) :
                ?><div class="col-lg-5" style="margin: auto;">
                        <form method="GET" action="<?= base_url('upload_file/pob/' . $p->berkas); ?>">
                            <button class="btn btn-5s btn-lg btn-block text-white "><i class="fas fa-download"></i> Download POB 5S</button>
                        </form>
                    </div>
                <?php $i++;
                endforeach;  ?>
            </div>

        </div>
        </div>
    </section>
    <!-- END STRUKTUR -->

    <!-- POB -->
    <!-- Portfolio-->


    <!-- END POB -->

    <hr>


    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 ">
                    <center>
                        <h2 class="mt-0" data-aos="zoom-in">Kontak Kami Jika menemui Kesulitan</h2>
                    </center>
                    <hr class="divider2 my-4" data-aos="fade-left" />
                    <center>
                        <p class="text-muted mb-5 " data-aos="fade-up">Kami akan berusaha semaksimal kami untuk membantu jika anda menemui Kesulitan dalam Penggunaan Aplikasi </p>
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto  mb-5 mb-lg-0">
                    <center>
                        <i class="fab fa-whatsapp fa-3x mb-3 text-muted"></i>
                        <div data-aos="fade-up">+62 82 938 934 421</div>
                    </center>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <center>
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" data-aos="fade-up" href="mailto:contact@yourwebsite.com">pokokisi@testEmail.com</a>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class=" py-3" style="background-color: #F78D1D;">
        <div class="container">
            <center>
                <div class="small text-white">Copyright © <?= date('Y'); ?> - Simoneva 5S All Right Reserved</div>
            </center>
        </div>
    </footer>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
</body>

</html>