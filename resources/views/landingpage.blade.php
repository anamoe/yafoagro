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
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Visi Misi</a></li>
          <li><a class="nav-link scrollto" href="#news">Berita Artikel Terbaru</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
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

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1 style="color: green;">{{$beranda->judul}}</h1>
            <h2 style="color: green;">{{$beranda->judul}}</h2>
            <a href="#about" class="btn-get-started scrollto">MULAI</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="{{url('public/logo')}}/{{$beranda->foto}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in">
            <img src="{{url('public/tentangkami')}}/{{$tentangkami->foto}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
              <h3 style="color: green;">{{$tentangkami->judul}}</h3>
              <p class="fst-italic">
              <h4 style="color: green; text-align:justify;">
                {{$tentangkami->isi}}
              </h4>
              </h3>

              </p>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2 style="color: green;">{{$visi->judul}}</h2>
          <p class="description" style="color: green; ">
            {{$visi->isi}}
          </p>
          <br />
          <div class="section-title" data-aos="fade-up">
            <h2 style="color: green;">MISI</h2>

          </div>

          <div class="row">
            @foreach($misi as $v)
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
              <div class="icon-box icon-box-green">
                <h4 class="title"><a href="" style="color: green; text-align:justify;">{{$v->judul}}</a></h4>
                <p class="description" style="color: green; text-align:justify;">
                {{$v->isi}}
                </p>
              </div>
            </div>
            @endforeach




          </div>

        </div>
    </section><!-- End Services Section -->

    <main id="main">

<!-- Other Sections (About, Services, Portfolio, Contact) -->

 <!-- ======= News Section ======= -->
 <section id="news" class="news">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2 style="color: green;">Berita Terbaru</h2>
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
   

        <div class="text-center mt-4">
          <a href="{{url('detail-berita')}}" class="btn btn-primary">Semua Berita</a>
        </div>
      </div>
    </section><!-- End News Section -->


</main><!-- End #main -->




    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 style="color: green;">GALERI</h2>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach($portfolio as $v)
          <div class="news-item col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{url('public/portfolio')}}/{{$v->foto}}" class="img-fluid" alt="">

              <div class="portfolio-links">
                <a href="{{url('public/portfolio')}}/{{$v->foto}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="text-center mt-4">
          <a href="{{url('detail-galeri')}}" class="btn btn-primary" style="background-color: green;">Semua Galeri</a>
        </div>
      </div>
    </section><!-- End Portfolio Section -->




    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 style="color:green">Kontak Kami</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>
                  {{$lokasi->isi}}
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>
                  {{$email->isi}}
                </p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>No Telp :</h4>
                <p> {{$telp->isi}}</p>
              </div>

     
            </div>

          </div>
          <div class="col-lg-7 d-flex align-items-stretch" data-aos="fade-right">
          {!! $maps->isi!!}
          </div>

        </div>
    </section><!-- End Contact Section -->

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
  <script>
  document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.portfolio-slider', {
      speed: 400,
      loop: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  });
</script>
</body>

</html>