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

        .content {
            flex: 1;
            overflow-y: auto;
            padding-bottom: 60px;
            /* height of bottom navigation */
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

        .list-group-item {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding-left: 10px;
            position: relative;
            margin-bottom: 10px;
            /* Jarak antar item */
            border-radius: 10px;
            /* Sudut melengkung untuk item */
            background-color: white;
            /* Warna latar belakang item */
        }

        .list-group-item::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 5px;
            background-color: green;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .list-content {
            margin-left: 15px;
            flex-grow: 1;
        }

        .item-date {
            font-size: 0.8em;
            color: #888;
            margin-bottom: 5px;
        }

        .item-title-card {
            background-color: green;
            padding: 10px;
            border-radius: 10px;
            color: white;
            width: 100%;
        }

        .item-title {
            font-size: 1.1em;
            font-weight: bold;
            color: white;
        }
        .custom-card {
            background-color: green; /* Warna hijau untuk card */
            color: white; /* Warna kuning untuk teks */
            border-radius: 15px; /* Membuat card menjadi rounded */
            transition: transform 0.2s; /* Animasi untuk hover */
        }
        .custom-card:hover {
            transform: scale(1.05); /* Efek zoom saat hover */
        }
        .custom-card a {
            color: white; /* Warna kuning untuk link teks */
            text-decoration: none; /* Menghilangkan underline pada link */
        }
    </style>
</head>

<body>
    <div class="topbar">
        <h2>KEBUNKU</h2>
    </div>
    <div class="content">
    <div class="container mt-5">
    <div class="row">
        
        <!-- Card for Alpukat -->
        <div class="col-6 col-md-6 mb-3">
            <div class="card custom-card text-center ">
                <div class="card-body">
                <a href="{{url('mitra/alpukat')}}">
                    
                        <h5 class="card-title">Alpukat</h5>
                    </a>
                </div>
            </div>
        </div>
        <!-- Card for Talas -->
        <div class="col-6 col-md-6 mb-3">
            <div class="card custom-card text-center">
                <div class="card-body">
                    <a href="{{url('mitra/talas')}}">
                        <h5 class="card-title">Talas</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
    
    </div>
    <div class="bottom-nav">
        <a href="#" class="active" style="text-decoration:underline;">
            <i class="fas fa-home"></i><br>
            Beranda
        </a>
        <a href="{{url('mitra/info-mitra')}}">
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
