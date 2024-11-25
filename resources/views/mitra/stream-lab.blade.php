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
    <link rel="stylesheet" href="{{asset('public/arfa/toastr/toastr.min.css') }}">

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
        <h3>Stream Lab </h3>
    </div>
    <div class="content">
        <div class="card custom-card rounded" style="background-color: #f0f0f0;margin:10px;border-radius:40px">
            <div class="card-body">
                <center>

                </center>
                <div class="text-justify" style="margin: 0 auto; max-width: 600px;">
                    <br>
                    <span style="color: black;">
                        Stream lab adalah agensi yang bermitra dengan UMKM shopee dan tiktok menyediakan fasilitas dan memberi edukasi, pelatihan, serta pendampingan bagi pelaku UMKM dalam menembangkan bisnisnya dengan memulai berjualan online.


                    </span>
                    <br>
                    <br>
                    <span style="color: black;">

                        Stream lab bekerjasama lebih dari 100 UMKM dan 50.000 item produk UMKM dan produk-produk pertanian. dengan adanya stream lab bertujuan untuk meningkatkan penghasilan dan dapat berbagi serta meningkatkan UMKM dan pertanian.

                    </span>
                    <br>
                    <br>
                    <span style="color: black;">


                        Stream lab juga bekerjasama dengan PT. Yafo Agro Indonesia untuk mengembangkan aneka olahan talas dari para mitra UMKM.
                    </span>

                </div>

            </div>
        </div>



    </div>

    <div class="bottom-nav">
        <a href="{{url('mitra/dashboard')}}" class="active" style="text-decoration:underline;">

            <i class="fas fa-home"></i><br>
            Beranda
        </a>
        <a href="{{url('mitra/profil-mitra')}}">
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{url('public/arfa/toastr/toastr.min.js')}}"></script>

</body>

</html>