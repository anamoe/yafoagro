<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>YAFOARGO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('public/logo')}}/LOGO YAFO aja.png" rel="icon">
    <link href="{{url('public/landingpage')}}/LOGO YAFO aja.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('public/landingpage')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{url('public/landingpage')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public/landingpage')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{url('public/landingpage')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{url('public/landingpage')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{url('public/landingpage')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('public/landingpage')}}/assets/css/style.css" rel="stylesheet">

    <style>
        body {
            padding-top: 70px; /* Menambahkan padding di bagian atas body untuk menjaga agar header tidak menutupi konten */
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" style="background-color: white;" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <div class="logo me-auto">
                <img src="{{url('public/logo')}}/LOGO YAFO aja.png" alt="">
                <a href="#" style="color: green;font-family: 'Times New Roman', Times, serif;">
                    YAFO AGRO INDONESIA</a>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{url('')}}">Beranda</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->


        <section id="about" class="about">
            <div class="container">
                <center>
                    <h1 style="color: green;">{{$tentangkami->judul}}</h1>
                </center>
                <div class="col-lg-12 d-flex justify-content-center" data-aos="zoom-in">
                    <img src="{{url('public/tentangkami')}}/{{$tentangkami->foto}}" style="width: 400px;" class="img-fluid mx-auto" alt="">
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column justify-contents-center" data-aos="fade-right">
                        <div class="content pt-4 pt-lg-0">
                            <h4>
                                <p class="fst-italic" style="color: green; text-align:justify;font-family: 'Times New Roman', Times, serif;">
                                    {{$tentangkami->isi}}
                                </p>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>PT. YAFOAGRO INDONESIA</span></strong>
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{url('public/landingpage')}}/assets/vendor/aos/aos.js"></script>
        <script src="{{url('public/landingpage')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('public/landingpage')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{url('public/landingpage')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="{{url('public/landingpage')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="{{url('public/landingpage')}}/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="{{url('public/landingpage')}}/assets/js/main.js"></script>

</body>

</html>
