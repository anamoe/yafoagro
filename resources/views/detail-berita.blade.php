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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="{{url('public/landingpage')}}/assets/css/style.css" rel="stylesheet">

<style>
    body,
    html {
      margin: 0;
      padding: 0;
      width: 100%;
      overflow-x: hidden;
    }

    .container {
      margin: 0;
      /* padding: 0 15px; */
      /* width: 100%; */
      max-width: 100%;
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

    .card {
      border-radius: 15px;
      /* Membuat ujung card menjadi lebih bulat */
      overflow: hidden;
      /* Menyembunyikan konten yang melebihi batas card */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      /* Menambahkan bayangan lembut */
    }

    .card-img-top {
      border-top-left-radius: 15px;
      /* Membuat ujung atas gambar card menjadi lebih bulat */
      border-top-right-radius: 15px;
    }

    .footer {
      background-color: green;
      /* Warna hijau */
      color: white;
      padding: 20px;
    }

    .contact-info p {
      margin: 5px 0;
    }

    .map iframe {
      width: 100%;
      height: 200px;
      /* Menyesuaikan tinggi peta */
      border: none;
    }
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
  </style>
</head>

<body>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

    <div class="containers d-flex align-items-center">
      <div class="logo me-auto">
        <img src="{{url('public/logo')}}/LOGO YAFO aja.png" alt="">
        <a href="#" style="color: green;font-family: 'Times New Roman', Times, serif;">
          YAFO AGRO INDONESIA</a>

      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="{{url('/')}}">Beranda</a></li>
          <li><a class="nav-link scrollto " href="{{url('landingpage-profil')}}">Profil</a></li>
          <li><a class="nav-link scrollto active" href="#">Berita dan Artikel</a></li>

        </ul>

      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="{{url('login')}}">
          <button class="btn btn-success" style="background-color: #FDBB26;color:green">MASUK</button>
        </a>
      </div>
    </div>
      <i class="bi bi-list mobile-nav-toggle"></i>

    </div>
  </header>

 <!-- ======= News Section ======= -->
  <br><br>
 <section id="news" class="news">
      <div class="container">
        <div class="section-title mt-5" >
        <h2 style="color: green;font-weight:bold">Berita Artikel</h2>
        <div class="underline" style="  width: 100%;
            height: 2px;
            background-color: #FDBB26;
             "></div>
        </div>

        <div class="row">
          @foreach($berita as $article)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="news-item">
              <img style="border-radius: 10px;" src="{{url('public/berita')}}/{{$article->foto}}" class="img-fluid" alt="{{$article->judul}}">
              <p ><a href="{{$article->link}}" style="color: green;">{{$article->judul}}</a></p>
            </div>
          </div>
          @endforeach
  
        </div>
   

      </div>
    </section><!-- End News Section -->



 <!-- ======= Footer ======= -->
 <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-info">
            <p><i class="bi bi-envelope"></i> info@example.com</p>
            <p><i class="bi bi-phone"></i> (021) 12345678</p>
            <p><i class="bi bi-map"></i> Jl. Contoh No. 123, Jakarta, Indonesia</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="contact-info">
            <p>IKUTI KAMI</p>
            <p><i class="bi bi-tiktok"></i> @yafoagro_indonesia</p>
            <p> <i class="bi bi-instagram"></i> @yafoagroindonesia</p>
            <p> <i class="bi bi-globe"></i> yafoagro.com</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="map">
          <h5 style="font-weight: bold;">
            Lokasi

            </h5>
            {!! $maps->isi!!}
          </div>
        </div>
      </div>
    </div>
  </footer>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('public/landingpage')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{url('public/landingpage')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public/landingpage')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{url('public/landingpage')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('public/landingpage')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{url('public/landingpage')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <!-- Template Main JS File -->
  <script src="{{url('public/landingpage')}}/assets/js/main.js"></script>

</body>

</html>