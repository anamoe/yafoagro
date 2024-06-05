<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAFOAGRO</title>
    <meta name="description" content="PT. Yafo Agro Indonesia adalah perusahaan agribisnis yang berkomitmen pada praktik ekonomi hijau Menyediakan produk dan jasa agrikultur yang berkualitas dan berkelanjutan, untuk menciptakan nilai tambah kepada seluruh pemangku kepentingan" />
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
            font-family: 'Montserrat', sans-serif;
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
    </style>
</head>

<body>
    <div class="topbar">
        <h2>KEBUNKU</h2>
    </div>

    <div class="content">
        <div class="container mt-4">
            <ul class="list-group">
                @foreach($data as $item)
                <li class="list-group-item">
                    <div class="item-date">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y ') }}</div>
                    <div class="item-title-card">
                        <div class="item-title">{{$item->judul}}</div>
                    </div>
                    <br>
                    <div class="d-flex flex-nowrap overflow-auto" style="max-width: 100%; overflow-x: auto;">
                        <div class="contact text-center mr-3">
                            <a href="{{url('public/monitoring-talas')}}/{{$item->foto}}" target="_blank">
                                <div class="card rounded" style="width: 150px;">
                                    <img src="{{url('public/monitoring-talas')}}/{{$item->foto}}" style="height: 100px;" class="card-img-top" alt="...">
                                </div>
                            </a>
                        </div>
                        <div class="contact text-center mr-3">
                            <a href="{{url('public/monitoring-talas')}}/{{$item->foto2}}" target="_blank">
                                <div class="card rounded" style="width: 150px;">
                                    <img src="{{url('public/monitoring-talas')}}/{{$item->foto2}}" style="height: 100px;" class="card-img-top" alt="...">
                                </div>
                            </a>
                        </div>
                        <div class="contact text-center mr-3">
                            <a href="{{url('public/monitoring-talas')}}/{{$item->foto3}}" target="_blank">
                                <div class="card rounded" style="width: 150px;">
                                    <img src="{{url('public/monitoring-talas')}}/{{$item->foto3}}" style="height: 100px;" class="card-img-top" alt="...">
                                </div>
                            </a>
                        </div>
                        <div class="contact text-center mr-3">
                            <a href="{{url('public/monitoring-talas')}}/{{$item->foto4}}" target="_blank">
                                <div class="card rounded" style="width: 150px;">
                                    <img src="{{url('public/monitoring-talas')}}/{{$item->foto4}}" style="height: 100px;" class="card-img-top" alt="...">
                                </div>
                            </a>
                        </div>
                        <div class="contact text-center mr-3">
                            <a href="{{url('public/monitoring-talas')}}/{{$item->foto5}}" target="_blank">
                                <div class="card rounded" style="width: 150px;">
                                    <img src="{{url('public/monitoring-talas')}}/{{$item->foto5}}" style="height: 100px;" class="card-img-top" alt="...">
                                </div>
                            </a>
                        </div>
                        <!-- Add more images here if needed -->
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>


    <div class="bottom-nav">
        <a href="{{url('mitra/dashboard')}}" class="active" style="text-decoration:underline;">
            <i class="fas fa-home"></i><br>
            Kebunku
        </a>
        <a href="{{'profil-mitra'}}">
            <i class="fas fa-user"></i><br>
            Profil
        </a>
        <a href="{{url('logout')}}">
            <i class="fas fa-arrow-right"></i><br>
            Keluar
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>