<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAFOAGRO</title>
    <meta name="description" content="PT. Yafo Agro Indonesia adalah perusahaan agribisnis yang berkomitmen pada praktik ekonomi hijau Menyediakan produk dan jasa agrikultur yang berkualitas dan berkelanjutan, untuk menciptakan nilai tambah kepada seluruh pemangku kepentingan"
     />
    <link href="{{url('public/logo')}}/LOGO YAFO aja.png" rel="icon">
  <link href="{{url('public/landingpage')}}/LOGO YAFO aja.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            font-family: 'Times New Roman', Times, serif;
            background-color: #f8f9fa;
        }

        .topbar {
            background-color: green;
            color: white;
            padding: 10px;
            height: 80px;
            text-align: center;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .content {
            flex: 1;
            overflow-y: auto;
            padding-bottom: 60px; /* height of bottom navigation */
            background-color: #f8f9fa;
        }

        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background-color: green;
            display: flex;
            justify-content: space-around;
            align-items: center;
            color: gainsboro;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }

        .bottom-nav a {
            color: white;
            text-align: center;
            flex: 1;
        }

        .bottom-nav a.active {
            font-weight: bold;
        }

        .contact-card {
            background-color: green;
            color: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .contact-card h5 {
            margin-top: 0;
        }

        .contact-info {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact-info li {
            margin-bottom: 10px;
        }

        .contact-info li i {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="topbar">
        <h2>Informasi</h2>
    </div>
    <div class="content">
        <div class="container mt-4">
            <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 mb-4">
                    <div class="contact">
                   <center>
                   <img src="{{url('public/logo')}}/LOGO YAFO hijau.png" class="img-fluid">
                        <h5>Pertanian Dalam Genggaman</h5>
                   </center>
                       
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 mb-4">
                    <div class="contact-card">
                      
                        <ul class="contact-info">
                            
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>{{$email->isi}}</li>
                            <li><i class="fab fa-tiktok"></i>@yafoagro_indonesia</li>
                            <li><i class="fab fa-instagram"></i>@yafoagroindonesia</li>
                            <li><i class="fas fa-globe"></i>yafoagro.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-nav">
        <a href="{{url('mitra/dashboard')}}">
            <i class="fas fa-home"></i><br>
            Beranda
        </a>
        <a href="#" class="active" style="text-decoration:underline;">
            <i class="fas fa-info"></i><br>
            Informasi
        </a>
        <a href="{{url('mitra/profil-mitra')}}">
            <i class="fas fa-user"></i><br>
            Data Mitra
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
