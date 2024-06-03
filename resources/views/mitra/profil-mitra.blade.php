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
            <div class="card-body" style="background-color:#7ebf9d;">
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" disabled class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="form-label">Username</label>
                            <input type="text"disabled class="form-control @error('username') is-invalid @enderror" name="username" value="{{$data->username}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="form-label">Ahli Waris</label>
                            <input type="text"disabled class="form-control @error('ahli_waris') is-invalid @enderror" name="ahli_waris" value="{{$data->ahli_waris}}">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">NIK</label>
                            <input type="number" disabled class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{$data->nik}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Alamat</label>
                            <input type="text" disabled class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{$data->alamat}}">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Tempat Lahir</label>
                            <input type="text" disabled class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{$data->tempat_lahir}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input type="date" disabled class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{$data->tgl_lahir}}">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Kode Pos</label>
                            <input type="number" disabled class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" value="{{$data->kode_pos}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">No. HP</label>
                            <input type="number" disabled class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{$data->no_hp}}">
                        </div>
                    </div>
                </div>

    

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nama Rekening</label>
                            <input type="text" disabled class="form-control @error('nama_rekening') is-invalid @enderror" name="nama_rekening" value="{{$data->nama_rekening}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nomor Rekening</label>
                            <input type="number" disabled class="form-control @error('no_rekening') is-invalid @enderror" name="no_rekening" value="{{$data->no_rekening}}">
                        </div>
                    </div>
                </div>

           
            </div>
            <br>
                <center>
                    <a href="{{url('logout')}}"> <button style="width: 50%;" class="btn btn-danger btn-block btn-lg">Logout
                        </button></a>

                </center>
                <br>

        </div>

        <div class="bottom-nav">
            <a href="{{'dashboard'}}">
                <i class="fas fa-home"></i><br>
                Beranda
            </a>
            <a href="{{'info-mitra'}}">
                <i class="fas fa-info"></i><br>
                Informasi
            </a>
            <a href="#" class="active" style="text-decoration:underline;">
                <i class="fas fa-user"></i><br>
                Data Mitra
            </a>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{url('public/arfa/toastr/toastr.min.js')}}"></script>
       
</body>

</html>