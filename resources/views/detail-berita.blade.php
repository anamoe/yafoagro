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
  .news .news-item {
  background: #fff;
  box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
  padding: 20px;
  border-radius: 10px;
  transition: all 0.3s;
  text-align: center;
}

.news .news-item img {
  max-width: 100%;
  max-height: 100%;
  border-radius: 10px;
  margin-bottom: 15px;
}

.news .news-item .title {
  font-size: 18px;
  font-weight: 600;
  margin: 0;
}

.news .news-item .title a {
  color: #333;
  text-decoration: none;
}

.news .news-item .title a:hover {
  color: green;
}

.swiper-pagination {
  bottom: 10px !important;
}

.news .btn {
  background-color: green;
  border: none;
  color: #fff;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 5px;
}

.news .btn:hover {
  background-color: darkgreen;
}

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" style="background-color: green;" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="{{url('login')}}" style="color: white;">YAFO AGRO</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('')}}">Beranda</a></li>
     
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="{{$instagram->isi}}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{$tiktok->isi}}" class="linkedin"><i class="bi bi-tiktok"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">


 <!-- ======= News Section ======= -->
 <section id="" class="">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2 style="color: green;">Semua Berita Artikel</h2>
        </div>

        <div class="row">
          @foreach($berita as $article)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="news-item">
              <img src="{{url('public/berita')}}/{{$article->foto}}" class="img-fluid" alt="{{$article->judul}}">
              <h4 class="title"><a href="{{$article->link}}" style="color: green;">{{$article->judul}}</a></h4>
            </div>
          </div>
          @endforeach
  
        </div>
   

        <!-- <div class="text-center mt-4">
          <a href="{{url('news/all')}}" class="btn btn-primary">Semua Berita</a>
        </div> -->
      </div>
    </section><!-- End News Section -->


</main><!-- End #main -->





  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>TRAZFO</span></strong>
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