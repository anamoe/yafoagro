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
                margin-left: -100px;
                /* Adjust this value according to your needs */
            }
        }
    </style>
</head>

<body>
    <div class="topbar">
        <h2></h2>
    </div>
    <div class="content">
        <div class="container mt-2">
            <h3 style="color: green;">Welcome</h3>
            <h4 style="color: green;">{{auth()->user()->name}}</h4>

            <div class="card custom-card">
                <div class="row">

                    <div class="col-6 col-md-3 mb-1">
                        <div class="inner-card text-center">
                            <div class="card-body">
                                <a href="{{url('mitra/kebunku')}}">

                                    <div class="card custom-card text-center" style="width: 90px; height: 90px; border-radius: 50%;background-color:green;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <img src="{{url('public/icon/monitoring.png')}}" style="" alt="" height="50px" width="50px">
                                        </div>
                                    </div>
                                </a>
                                <h5 class="card-title">Kebunku</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Icon 2 -->
                    <div class="col-6 col-md-3 mb-1">
                        <div class="inner-card text-center">
                            <div class="card-body">
                                <a href="{{url('mitra/simulasi-panen')}}">
                                    <div class="card custom-card text-center" style="width: 90px; height: 90px; border-radius: 50%;background-color:green;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <img src="{{url('public/icon/simulasi.png')}}" alt="" height="50px" width="50px">
                                        </div>
                                    </div>
                                </a>

                                <h5 class="card-title" style="">Simulasi Panen</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Icon 3 -->
                    <div class="col-6 col-md-3 mb-1">
                        <div class="inner-card text-center">
                            <div class="card-body">
                                <a href="{{url('mitra/tanaman')}}">

                                    <div class="card custom-card text-center" style="width: 90px; height: 90px; border-radius: 50%;background-color:green;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <img src="{{url('public/icon/tanaman.png')}}" style="" alt="" height="50px" width="50px">
                                        </div>
                                    </div>
                                </a>


                                <h5 class="card-title">Data Tanaman</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-1">
                        <div class="inner-card text-center">
                            <div class="card-body">
                                <a href="https://www.google.com/maps?ll=-8.274845,114.148693&z=16&t=m&hl=id&gl=ID&mapclient=embed&cid=1496055298570704826">

                                    <div class="card custom-card text-center" style="width: 90px; height: 90px; border-radius: 50%;background-color:green;">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <img src="{{url('public/icon/maps.png')}}" style="" alt="" height="50px" width="50px">
                                        </div>
                                    </div>
                                </a>

                                <h5 class="card-title">Lokasi</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mb-1">
                       
                        <div class="inner-card text-center mx-auto">
                            <div class="card-body">
                                <!-- <a href="#" data-toggle="modal" data-target="#termModal"> -->
                                @if ($showPopup)
                                <a href="#" data-toggle="modal" data-target="#termModal">
                                @else
                                <a href="{{ $redirectTo }}">
                                @endif


                                <div class="card custom-card text-center" style="width: 90px; height: 90px; border-radius: 50%; background-color:green;">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <img src="{{ url('public/icon/term.png') }}" alt="" height="50px" width="50px">
                                    </div>
                                </div>
                                </a>
                                <h5 class="card-title">Term & Condition</h5>
                            </div>
                        </div>



                    </div>

                    <div class="col-6 col-md-3 mb-1">
                       
                       <div class="inner-card text-center mx-auto">
                           <div class="card-body">
                           
                               <a href="{{('stream-lab')}}">
                            

                               <div class="card custom-card text-center" style="width: 90px; height: 90px; border-radius: 50%; background-color:green;">
                                   <div class="card-body d-flex justify-content-center align-items-center">
                                       <img src="{{ url('public/icon/term.png') }}" alt="" height="50px" width="50px">
                                   </div>
                               </div>
                               </a>
                               <h5 class="card-title">Stream Lab</h5>
                           </div>
                       </div>



                   </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="termModal" tabindex="-1" role="dialog" aria-labelledby="termModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="termModalLabel">Terms & Conditions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        @if($showTalasButton)
                        <a href="{{ url('mitra/term/talas') }}" class="btn btn-primary mb-2">Term Talas</a>
                        @endif
                        @if($showAlpukatButton)
                        <a href="{{ url('mitra/term/alpukat') }}" class="btn btn-primary mb-2">Term Alpukat</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-nav">
            <a href="#" class="active" style="text-decoration:underline;">
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
</body>

</html>