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

        .custom-card {
            background-color: white;
            /* Warna putih untuk card */
            color: green;
            /* Warna hijau untuk teks */
            border-radius: 15px;
            /* Membuat card menjadi rounded */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            /* Animasi untuk hover */
            padding: 20px;
            text-align: center;
        }

        .custom-card:hover {
            transform: scale(1.05);
            /* Efek zoom saat hover */
        }

        .custom-card .icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .custom-card .btn {
            margin-top: 15px;
        }

        .inner-card {
            border: none;
            background-color: transparent;
        }
        @media (min-width: 768px) {
    .card-title {
        margin-left: -380px; /* Adjust this value according to your needs */
    }
}
    </style>
</head>

<body>
    <div class="topbar">
        <h2>KEBUNKU</h2>
    </div>
    <div class="content">
        <div class="container mt-2">
          

            <div class="card custom-card">
                <div class="row">

                    <div class="col-6 col-md-6 mb-1">
                        <div class="inner-card text-center">
                            <div class="card-body">
                                <a href="{{url('admin/list-talas')}}">

                                    <div class="card custom-card text-center" style="width: 90px; height: 90px; border-radius: 50%;background-color:green;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <img src="{{url('public/icon/talas.png')}}" style="" alt="" height="50px" width="50px">
                                        </div>
                                    </div>
                                </a>
                                <h5 class="card-title">Talas</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Icon 2 -->
                    <!-- <div class="col-6 col-md-6 mb-1">
                        <div class="inner-card text-center">
                            <div class="card-body">
                                <a href="{{url('admin/list-alpukat')}}">
                                    <div class="card custom-card text-center" style="width: 90px; height: 90px; border-radius: 50%;background-color:green;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <img src="{{url('public/icon/alpukat.png')}}" alt="" height="50px" width="50px">
                                        </div>
                                    </div>
                                </a>

                                <h5 class="card-title" style="">Alpukat</h5>
                            </div>
                        </div>
                    </div>
                    -->
            
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-nav">
        <a href="{{url('admin/tanaman')}}" class="active" style="text-decoration:underline;">
            <i class="fas fa-home"></i><br>
            Kembali
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