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
            <form id="simulasiForm">
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" class="form-control" id="harga" placeholder="Masukkan harga">
                </div>
                <div class="form-group">
                    <!-- <label for="jumlahBibit">Jumlah Bibit:</label> -->
                    <input type="hidden" class="form-control" id="jumlahBibit" value="{{$jumlahbibit->jumlah_bibit}}">
                </div>
                <div class="form-group">
                    <!-- <label for="jumlahSatuanPanen">Jumlah Satuan Panen (per tahun/Kg):</label> -->
                    <input type="hidden" class="form-control" id="jumlahSatuanPanen" value="2" placeholder="Masukkan jumlah satuan panen">
                </div>
                <button type="button" class="btn btn-success" onclick="hitungTotal()">Simulasi Cek</button>
            </form>
            <div id="hasilPerhitungan" class="mt-4"></div>
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

    <script>
        function hitungTotal() {
            var harga = parseFloat(document.getElementById('harga').value);
            var jumlahBibit = parseInt(document.getElementById('jumlahBibit').value);
            var jumlahSatuanPanen = parseInt(document.getElementById('jumlahSatuanPanen').value);
            var total = harga * jumlahBibit * jumlahSatuanPanen;
        
            if (!isNaN(harga) && !isNaN(jumlahBibit) && !isNaN(jumlahSatuanPanen)) {
                var total = harga * jumlahBibit * jumlahSatuanPanen;
                var formattedTotal = total.toLocaleString('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                });
                document.getElementById('hasilPerhitungan').innerHTML = '<h4>Total: ' + formattedTotal + '</h4>';
            } else {
                alert('Mohon isi semua input dengan angka.');
            }
        }
    </script>
</body>

</html>
