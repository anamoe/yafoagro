<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAFOAGRO</title>
    <meta name="description" content="PT. Yafo Agro Indonesia adalah perusahaan agribisnis yang berkomitmen pada praktik ekonomi hijau Menyediakan produk dan jasa agrikultur yang berkualitas dan berkelanjutan, untuk menciptakan nilai tambah kepada seluruh pemangku kepentingan" />
    <link href="{{ url('public/logo') }}/LOGO YAFO aja.png" rel="icon">
    <link href="{{ url('public/landingpage') }}/LOGO YAFO aja.png" rel="apple-touch-icon">
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
            padding-bottom: 100px;
            background-color: #f8f9fa;
            position: relative;
            z-index: 1;
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
            z-index: 10;
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
            padding-left: 40px;
            padding-top: 0;
            position: relative;
            margin-bottom: 10px;
            border-radius: 10px;
            background-color: white;
        }

        .progress-container {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            z-index: 1;
        }

        .progress-line {
            position: absolute;
            width: 4px;
            height: 100%;
            background-color: #ccc;
            z-index: 1;
        }

        .progress-step {
            position: relative;
            width: 20px;
            height: 20px;
            background-color: #ccc;
            border-radius: 50%;
            z-index: 2;
            margin: 10px 0;
        }

        .progress-step.completed {
            background-color: #28a745;
        }

        .progress-line.completed {
            background-color: #28a745;
        }

        .item-date {
            font-size: 0.8em;
            color: #888;
            margin-bottom: 5px;
            position: absolute;
            top: -20px;
            left: 40px;
        }

        .item-title-card {
            padding: 10px;
            border-radius: 10px;
            width: calc(100% - 60px);
            margin-left: 20px;
        }

        .item-title {
            font-size: 1.1em;
            font-weight: bold;
            color: green;
        }

        .image-container {
            display: flex;
            overflow-x: auto;
            padding-left: 60px;
            margin-top: 10px;
        }

        .image-container .contact {
            flex: 0 0 auto;
            margin-right: 10px;
        }

        .image-container .contact img {
            height: 100px;
            width: 150px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="topbar">
        <h2>Tanaman Alpukat</h2>
    </div>

    
    <div class="content">
    @foreach($datas as $data)

    <a href="{{url('mitra/list-alpukat/'.$data->id)}}">

        <div class="card custom-card rounded" style="background-color: #f0f0f0;margin:20px;border-radius:40px">
            <div class="card-body">
                <ul class="list-group list-group-flush">

                    <span style="color: black; ">No. Sertifikat</span> <span style="color: green;font-weight: bold;">{{$data->no_sertifikat}}</span><br>
                   
                </ul>
            </div>

        </div>
        </a>
        @endforeach

    </div>

    <div class="bottom-nav">
        <a href="{{ url('mitra/dashboard') }}" class="active" style="text-decoration:underline;">
            <i class="fas fa-home"></i><br>
            Kebunku
        </a>
        <a href="{{url('mitra/profil-mitra' )}}">
            <i class="fas fa-user"></i><br>
            Profil
        </a>
        <a href="{{ url('logout') }}">
            <i class="fas fa-arrow-right"></i><br>
            Keluar
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
