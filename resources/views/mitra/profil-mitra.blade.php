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
    <link rel="stylesheet" href="{{asset('public/arfa/toastr/toastr.min.css') }}">

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
    </style>
    
</head>

<body>
    <div class="topbar">
        <h2>Profil </h2>
    </div>
    <div class="content">
        <div class="container mt-4">

                <form action="{{url('profil',$users->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card " style="background-color: green">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">


                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label style="color: white;" class="label" for="name">Nama</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{auth()->user()->name}}" name="name" id="nama" placeholder="Nama">
                                        </div>
                                    </div>

                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label style="color: white;" class="label" for="name">Username</label>
                                            <input type="text" class="form-control  @error('username') is-invalid @enderror" value="{{$users->username }}" name="username" id="tanggal_lahir" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>

                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label style="color: white;" class="label" for="name">Password</label>
                                            <input type="number" class="form-control @error('password') is-invalid @enderror" value="" name="password" placeholder="Password">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="form-button-group transparent">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Simpan</button>
                    </div>

                </form>
            </div>
            <br>
            <center>
            <a href="{{url('logout')}}"> <button style="width: 50%;" class="btn btn-danger btn-block btn-lg">Logout
            </button></a>
                
            </center>
        </div>
        
    </div>
    
    <div class="bottom-nav">
        <a href="{{'dashboard'}}">
            <i class="fas fa-home"></i><br>
            Beranda
        </a>
        <a href="{{'info-mitra'}}">
            <i class="fas fa-info"></i><br>
            Menu
        </a>
        <a href="#" class="active" style="text-decoration:underline;">
            <i class="fas fa-user"></i><br>
            Profil
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{url('public/arfa/toastr/toastr.min.js')}}"></script>
    <script>
        toastr.options.timeOut = 1500;
        toastr.options.showMethod = 'slideDown';
        toastr.options.hideMethod = 'slideUp';
        toastr.options.closeMethod = 'slideUp';
        @if(session()->has('success'))
            toastr.info('{{session()->get("success")}}')
        @elseif(session()->has('error'))
            toastr.error('{{session()->get("error")}}')
        @endif
    </script>
</body>

</html>