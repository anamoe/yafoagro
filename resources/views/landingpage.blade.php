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
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
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

    .card-custom {
      background-color: white;
      border-radius: 10px;
      padding: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .card-custom .icon {
      margin-left: 5px;
    }

    .card-custom.active .dropdown-content {
      display: block;
    }

    .dropdown-content {
      display: none;
      /* position: absolute; */
      background-color: white;
      width: 100%;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      padding: 15px;
      /* Sesuaikan padding dengan kebutuhan */
      border-radius: 10px;
    }

    .dropdown-content p {
      color: green;
      margin: 0;
      /* Hapus margin default agar tidak ada spasi di sekitar teks */
    }
    
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

    <div class="containers d-flex align-items-center">

    <div class="logo me-auto">
        <img src="{{url('public/logo')}}/LOGO YAFO aja.png" alt="">
        <a href="#" style="color: green;">
          YAFO AGRO INDONESIA</a>

      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Beranda</a></li>
          <li><a class="nav-link scrollto" href="{{url('landingpage-profil')}}">Profil</a></li>
          <li><a class="nav-link scrollto" href="{{url('detail-berita')}}">Berita dan Artikel</a></li>

        </ul>

      </nav>

      <div class="header-social-links d-flex align-items-center">
        <a href="{{url('login')}}">
          <button class="btn btn-success" style="background-color: #FDBB26;color:green">MASUK</button>
        </a>
      </div>
    </div>
    
      <i class="bi bi-list mobile-nav-toggle"></i>

    </div>
  </header>



  <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img style="height: 500px;width:auto; object-fit: cover;border-radius:10px" class="d-block w-100" src="{{ asset('public/icon/1.jpeg') }}" alt="Slide 1">
            </div>
            <div class="carousel-item">
              <img style="height: 500px;width:auto; object-fit: cover;border-radius:10px" class="d-block w-100" src="{{ asset('public/icon/4.jpg') }}" alt="Slide 2">
            </div>
            <div class="carousel-item">
              <img style="height: 500px;width:auto; object-fit: cover;border-radius:10px" class="d-block w-100" src="{{ asset('public/icon/3.jpg') }}" alt="Slide 2">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

  <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
    <ol class="carousel-indicators">
      @foreach ($portfolio as $index => $image)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      @foreach ($portfolio as $index => $image)
      <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
        <img style="height: 500px;width:auto;
            object-fit: cover;" class="d-block w-100" src="{{ asset('public/portfolio/' . $image->foto) }}" alt="Slide {{ $index + 1 }}">
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->

  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 rounded" >
          <img src="{{url('public/tentangkami')}}/{{$tentangkami->foto}}" style="border-radius: 10px;" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-contents-center" >
          <div class="content pt-4 pt-lg-0">
            <h3 style="color: green;">APA ITU TALAS ? </h3>
            <div class="underline" style="  width: 100%;
            height: 2px;
            background-color: #FDBB26;
            margin-top: 10px; "></div>
            <p class="fst-italic">
            <h5 style="color: green; text-align:justify;font-family: 'Times New Roman', Times, serif;font-size:large ">


              <p> {{$tentangkami->isi}}</p>
            </h5>


            </p>

          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End About Section -->

  <section id="about" class="about">
    <div class="container mt-5" style="background-color: green;">
      <center>
        <h2 style="color: white;">MANFAAT TALAS</h2>
        <div class="underline" style="  width: 100%;
            height: 2px;
            background-color: #FDBB26;
            margin-top: 10px; "></div>

      </center>
      <br>

      <div class="card-custom rounded" id="card1" style="background-color: #FDBB26;">
        <div class="d-flex justify-content-between align-items-center">
          <span style="color: green;font-weight:bold">Meningkatkan Energi</span>
          <button class="btn btn-link text-success" onclick="toggleDropdown('card1')">
            <i class="fas fa-caret-down icon"></i>
          </button>
        </div>
        <div class="dropdown-content " id="dropdown1">
          <p style="color: green;">
            Dengan indeks glikemik yang rendah, talas menjadi pilihan yang
            cocok untuk meningkatkan energi tanpa menimbulkan lonjakan
            gula darah yang tiba-tiba. Itulah mengapa atlet sering memilih
            talas sebagai bagian dari menu mereka saat menghadapi
            kompetisi.
          </p>
        </div>
      </div>
      <div class="card-custom rounded" id="card2" style="background-color: #FDBB26;">
        <div class="d-flex justify-content-between align-items-center">
          <span style="color: green;font-weight:bold">Melindungi Jantung</span>
          <button class="btn btn-link text-success" onclick="toggleDropdown('card2')">
            <i class="fas fa-caret-down icon"></i>
          </button>
        </div>
        <div class="dropdown-content " id="dropdown2">
          <p style="color: green;">
            Hasil penelitian ilmiah mengungkapkan, kandungan potasium
            dalam talas membantu mengendalikan detak jantung dan
            tekanan darah. Potasium membantu mengatur tekanan darah
            dengan mengurangi efek natrium pada tubuh.

          </p>
        </div>
      </div>
      <div class="card-custom rounded" id="card3" style="background-color: #FDBB26;">
        <div class="d-flex justify-content-between align-items-center">
          <span style="color: green;font-weight:bold">Mengontrol Gula Darah / Diabetes</span>
          <button class="btn btn-link text-success" onclick="toggleDropdown('card3')">
            <i class="fas fa-caret-down icon"></i>
          </button>
        </div>
        <div class="dropdown-content " id="dropdown3">
          <p style="color: green;">
            Talas mengandung serat dan pati resisten yang membantu
            mengontrol gula darah. Hasil studi menunjukan bahwa Serat
            memperlambat pencernaan dan penyerapan karbohidrat,
            sehingga tidak langsung mempengaruhi kadar gula darah, cocok
            untuk penderita diabetes

          </p>
        </div>
      </div>
      <div class="card-custom rounded" id="card4" style="background-color: #FDBB26;">
        <div class="d-flex justify-content-between align-items-center">
          <span style="color: green;font-weight:bold">
            Menjaga Kesehatan Otot

          </span>
          <button class="btn btn-link text-success" onclick="toggleDropdown('card4')">
            <i class="fas fa-caret-down icon"></i>
          </button>
        </div>
        <div class="dropdown-content " id="dropdown4">
          <p style="color: green;">
            Mineral magnesium yang tinggi dalam talas memiliki peran
            penting dalam menjaga kesehatan otot, tulang, dan saraf.
            Dengan mengonsumsi talas secara teratur, kita memberikan
            dukungan yang diperlukan bagi fungsi otot tubuh.

          </p>
        </div>
      </div>
      <div class="card-custom rounded" id="card5" style="background-color: #FDBB26;">
        <div class="d-flex justify-content-between align-items-center">
          <span style="color: green;font-weight:bold">
            Mengurangi Risiko Penyakit Jantung

          </span>
          <button class="btn btn-link text-success" onclick="toggleDropdown('card5')">
            <i class="fas fa-caret-down icon"></i>
          </button>
        </div>
        <div class="dropdown-content " id="dropdown5">
          <p style="color: green;">
            Serat dan pati resisten dalam talas dapat membantu
            mengurangi risiko penyakit jantung. Konsumsi serat tinggi terkait
            dengan tingkat penyakit jantung yang lebih rendah. Pati resisten
            membantu menurunkan kolesterol dan berkaitan dengan
            penurunan risiko penyakit jantung

          </p>
        </div>
      </div>
      <div class="card-custom rounded" id="card6" style="background-color: #FDBB26;">
        <div class="d-flex justify-content-between align-items-center">
          <span style="color: green;font-weight:bold">
            Membantu Menurunkan Berat Badan

          </span>
          <button class="btn btn-link text-success" onclick="toggleDropdown('card6')">
            <i class="fas fa-caret-down icon"></i>
          </button>
        </div>
        <div class="dropdown-content " id="dropdown6">
          <p style="color: green;">
            Talas, dengan kandungan serat dan karbohidrat kompleksnya,
            memberikan rasa kenyang yang lebih lama. Ini membantu
            mengurangi keinginan untuk ngemil atau mengonsumsi
            makanan tinggi kalori, mendukung upaya menjaga berat badan
            ideal.

          </p>
        </div>
      </div>
      <div class="card-custom rounded" id="card7" style="background-color: #FDBB26;">
        <div class="d-flex justify-content-between align-items-center">
          <span style="color: green;font-weight:bold">
            Antikanker

          </span>
          <button class="btn btn-link text-success" onclick="toggleDropdown('card7')">
            <i class="fas fa-caret-down icon"></i>
          </button>
        </div>
        <div class="dropdown-content " id="dropdown7">
          <p style="color: green;">
            Senyawa polifenol, terutama quercetin, yang ditemukan dalam
            talas, telah menunjukkan potensi sebagai agen antikanker.
            Meskipun perlu penelitian lebih lanjut, hasil studi menunjukkan
            bahwa quercetin dapat memperlambat pertumbuhan sel kanker
            dan melindungi tubuh dari kerusakan akibat radikal bebas.

          </p>
        </div>
      </div>
      <div class="card-custom rounded" id="card8" style="background-color: #FDBB26;">
        <div class="d-flex justify-content-between align-items-center">
          <span style="color: green;font-weight:bold">
            Menyehatkan Usus

          </span>
          <button class="btn btn-link text-success" onclick="toggleDropdown('card8')">
            <i class="fas fa-caret-down icon"></i>
          </button>
        </div>
        <div class="dropdown-content " id="dropdown8">
          <p style="color: green;">
            Serat dan pati resisten pada talas mendukung kesehatan usus.
            Makanan ini menjadi sumber makanan bagi mikroba di usus,
            mendukung pertumbuhan bakteri baik atau probiotik


          </p>
        </div>
      </div>
      <div class="card-custom rounded" id="card9" style="background-color: #FDBB26;">
        <div class="d-flex justify-content-between align-items-center">
          <span style="color: green;font-weight:bold">
            Memenuhi Kebutuhan Seng

          </span>
          <button class="btn btn-link text-success" onclick="toggleDropdown('card9')">
            <i class="fas fa-caret-down icon"></i>
          </button>
        </div>
        <div class="dropdown-content " id="dropdown9">
          <p style="color: green;">
            Seng merupakan mineral yang esensial untuk kesehatan tubuh,
            dan talas menyediakan kontribusi yang berarti. Kekurangan seng
            dapat menyebabkan berbagai masalah kesehatan, dan konsumsi
            talas dapat membantu memenuhi kebutuhan seng harian

          </p>
        </div>
      </div>
      <div class="card-custom rounded" id="card10" style="background-color: #FDBB26;">
        <div class="d-flex justify-content-between align-items-center">
          <span style="color: green;font-weight:bold">
            Memperlambat Penuaan

          </span>
          <button class="btn btn-link text-success" onclick="toggleDropdown('card10')">
            <i class="fas fa-caret-down icon"></i>
          </button>
        </div>
        <div class="dropdown-content " id="dropdown10">
          <p style="color: green;">
            Penelitian mengungkapakn bahwa kandungan antioksidan,
            seperti vitamin A, C, dan E, serta polifenol, membantu melindungi
            tubuh dari penyakit dan memperlambat penuaan. Talas juga
            mengandung protein dan bebas gluten, bebas kolesterol, dan
            rendah sodium


          </p>
        </div>
      </div>

      <div class="card-custom rounded" id="card11" style="background-color: #FDBB26;">
        <div class="d-flex justify-content-between align-items-center">
          <span style="color: green;font-weight:bold">
            Meningkatkan Kesehatan Mata

          </span>
          <button class="btn btn-link text-success" onclick="toggleDropdown('card11')">
            <i class="fas fa-caret-down icon"></i>
          </button>
        </div>
        <div class="dropdown-content " id="dropdown11">
          <p style="color: green;">
            Antioksidan seperti beta-karoten dan cryptoxanthin dalam talas
            tidak hanya memberikan warna pada umbinya tetapi juga
            bermanfaat untuk menjaga kesehatan mata. Mereka melindungi
            mata dari radikal bebas yang dapat menyebabkan degenerasi
            makula atau katarak.


          </p>
        </div>
      </div>

    </div>

  </section>



  <!-- ======= News Section ======= -->
  <section id="news" class="news">
    <div class="container mt-4">
      <div class="section-title" >
        <h2 style="color: green;font-weight:bold">PRODUK OLAHAN</h2>
        <div class="underline" style="  width: 100%;
            height: 2px;
            background-color: #FDBB26;
            margin-top: 10px; "></div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="news-item">
            <img src="{{url('public/icon')}}/31.png" class="img-fluid" alt="">
            <h4 class="title" style="color: green;"> KRIPIK TALAS</h4>
            <p class="" style="color: green;">Talas Pratama dipotong tipis,
              dikeringkan, dan digoreng
              menjadi keripik yang renyah.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="news-item">
            <img src="{{url('public/icon')}}/33.png" class="img-fluid" alt="">
            <h4 class="title" style="color: green;"> MINUMAN</h4>
            <p class="" style="color: green;">Talas Pratama juga dapat
              digunakan dalam pembuatan
              minuman, seperti jus talas
              Pratama atau smoothie talas
              Pratama
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="news-item">
            <img src="{{url('public/icon')}}/312.png" class="img-fluid" alt="">
            <h4 class="title" style="color: green;"> TEPUNG TALAS</h4>
            <p class="" style="color: green;">Talas Pratama juga diolah
              menjadi tepung yang dapat
              digunakan sebagai bahan
              dasar dalam pembuatan roti,
              kue, dan produk makanan
              lainnya.

            </p>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="news-item">
            <img src="{{url('public/icon')}}/30.png" class="img-fluid" alt="">
            <h4 class="title" style="color: green;">MAKANAN OLAHAN</h4>
            <p class="" style="color: green;">Talas Pratama dapat diolah
              menjadi berbagai produk
              makanan olahan, seperti puree
              talas Pratama, bola-bola talas
              Pratama, atau hidangan
              seperti kue talas Pratama.
              Produk olahan ini
              menawarkan variasi dalam
              penggunaan talas Pratama
              dalam hidangan sehari-hari
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="news-item">
            <img src="{{url('public/icon')}}/332.png" class="img-fluid" alt="">
            <h4 class="title" style="color: green;"> TALAS FROZEN</h4>
            <p class="" style="color: green;">Talas Pratama ini bisa juga
              diolah menjadi makanan yang
              mudah dan praktis serta kaya
              akan gizi yaitu talas frozen.
              Dengan olahan talas frozen ini,
              bisa digunakan sebagai
              alternatif makanan frozen lain
              yang tentunya murah dan
              bergizi.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="news-item">
            <img src="{{url('public/icon')}}/32.png" class="img-fluid" alt="">
            <h4 class="title" style="color: green;">KOSMETIK</h4>
            <p class="" style="color: green;">Talas Pratama juga digunakan
              dalam industri kosmetik.
              Ekstrak talas Pratama atau
              bahan alami dari tanaman
              tersebut dapat digunakan
              dalam produk perawatan kulit,
              masker wajah, atau produk

            </p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End News Section -->















  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-info">
          <p><i class="bi bi-envelope"></i> {{$email->isi}}</p>
            <!-- <p><i class="bi bi-phone"></i>  {{$telp->isi}}</p> -->
            <p><i class="bi bi-map"></i> {{$lokasi->isi}}</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="contact-info">
            <p>IKUTI KAMI</p>
            <p>
              <a href="https://www.tiktok.com/@yafoagro_indonesia" style="color: blue;">
                <i class="bi bi-tiktok"></i> @yafoagro_indonesia</a>
            </p>
            <p>
            <a href="https://www.instagram.com/yafoagroindonesia" style="color: blue;">
            <i class="bi bi-instagram"></i> @yafoagroindonesia</a>
            </p>
            <p>
            <a href="https://yafoagro.com/" style="color: blue;">
            <i class="bi bi-globe"></i> yafoagro.com</a>
            </p>
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

  <!-- Template Main JS File -->
  <script src="{{url('public/landingpage')}}/assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

  <script>
    function toggleDropdown(cardId) {
      var card = document.getElementById(cardId);
      card.classList.toggle('active');
    }
  </script>
</body>

</body>

</html>