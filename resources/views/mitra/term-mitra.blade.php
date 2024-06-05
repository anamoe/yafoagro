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
        <h3>Term & Condition </h3>
    </div>
    <div class="content">
        <div class="card custom-card rounded" style="background-color: #f0f0f0;margin:10px;border-radius:40px">
            <div class="card-body">
              <center>
              <h5>
              <span style="color: black; font-weight: bold; text-align: center;">
                    KETENTUAN DAN SYARAT PEMBELIAN PAKET
                    BIBIT TALAS PRATAMA DARI PT. YAFO AGRO INDONESIA

                </span>
              </h5>
              </center>
                <div class="text-justify" style="margin: 0 auto; max-width: 600px;">
                    <br>
                    <span style="color: black;">
                        Ketentuan dan syarat-syarat harus ditaati dan dipatuhi oleh pembeli tanaman bibit talas pratama dan syarat-syarat lainnya yang
                        nanti lebih lanjut disepakati bersama-sama dengan PT. YAI. Kami yang memiliki 3/sertifkat kepemilikan bibit ini
                        secara sadar dan tanpa paksaan, bersedia dan melaksanakan semua ketentuan dan syarat pembelian bibit talas pratama atau
                        PT. YAI sebagai berikut:
                    </span>
                    <br><br>
                    <span style="color: black;  text-align: justify;">
                        1) Kami memahami sepenuhnya bahwa PT. YAI bukanlah sebagai lembaga investasi, dan sepenuhnya memahami bahwa dengan membeli bibit talas pratama PT. YAI, adalah sebagai penyedia bibit dengan berbagai fasilitas didalamnya seperti pencarian lahan yang sesuai, pengurusan legalitas, perawatan,
                        penyedia tenaga ahli, dan pelaporan perkembangan pertumbuhan bibit.
                    </span>
                    <br><br>
                    <span style="color: black;  text-align: justify;">
                        2) Kami bersama dengan ini pula memberikan kuasa kepada PT. YAI agar mencarikan dan menguruskan lahan tempat bibit talas pratama milik kami.
                    </span>
                    <br><br>
                    <span style="color: black;  text-align: justify;">
                        3) Kami sepakat bahwa masa berkebun talas pratama sebagai bahan baku industri makanan adalah bibit talas pratama 2 dengan rata-rata berat tonase antara 1-5 Kg/umbi dengan masa panen antara 7-8 bulan dalam sekali periode tanam.
                    </span>
                    <br><br>
                    <span style="color: black;  text-align: justify;">
                        4) Kami sepenuhnya memahami dan menyetujui syarat dan ketentuan pengelolaan kebun talas pratama oleh PT. YAI yaitu sebagai berikut:
                    </span>
                    <br>
                    <span style="color: black; text-align: left;margin-left:10px">
                        a. Dalam waktu 7-8 bulan masa tanam jika terjadi kematian bibit maka setiap kematian bibit akan mendapat ganti dengan bibit baru dengan penanaman ulang oleh PT. YAI
                    </span>
                    <br>
                    <span style="color: black; text-align: left;margin-left:10px">

                        b. Apabila terjadi bencana alam dan mengakibatkan kematian bibit pada masa sebelum panen akan diganti oleh PT. YAI dari jumlah bibit cadangan dari lahan cluster blok yang sama dan apabila bibit cadangan tersebut habis rusak semua dalam satu lahan petak (cluster blok) sebelum dipanen maka akan diganti dengan cadangan bibit dari lahan di tempat (cluster blok) yang lain, kemudian apabila sudah tidak ada lagi cadangan bibit yang dimiliki PT. YAI maka akan dilakukan penggantian dengan penanaman bibit yang baru.
                    </span>
                    <br>
                    <span style="color: black; text-align: left;margin-left:10px">

                        c. Apabila tanaman bibit talas pratama hilang dikarenakan pencurian maka akan mendapatkan ganti dari bibit cadangan yang ada.
                    </span>
                    <br>
                    <span style="color: black; text-align: left;margin-left:10px">

                        d. Apabila pemilik bibit/ahli warisnya akan mengalihkan kepemilikan aset bibit talas pratama kepada pihak ketiga maka wajib memberitahukan pengalihan tersebut kepada PT. YAI, untuk dapat diproses administrasi balik nama sesuai peraturan yang berlaku dan seluruh pembiayaan akibat dari hal tersebut ditanggung oleh pemilik bibit.
                    </span>
                    <br>
                    <span style="color: black; text-align: left;margin-left:10px">

                        e. PT. YAI dikuasakan untuk menyelasaikan segala permasalahan yang terjadi di lapangan berkaitan dengan penanaman bibit talas pratama ini.
                    </span>
                    <br>
                    <span style="color: black; text-align: left;margin-left:10px">

                        f. PT. YAI akan memfasilitasi penjualan hasil panen bibit talas pratama, dengan harga jual bibit talas pratama sesuai dengan harga jual pada saat masa panen.
                    </span>
                    <br>
                    <span style="color: black; text-align: left;margin-left:10px">

                        g. Untuk mempermudah proses panen dan perhitungan pembagaian hasil panen maka kami selaku pemlik bibit bersedia untuk mensyirkahkan (menggabungkan hasil panen dalam 1 hektar / cluster blok dengan pemilik bibit yang lain) yang kemudian dapat dibagikan dan dihitung berdasarkan jumiah bibit yang dimiliki masing-masing.
                    </span>
                    <br>
                    <span style="color: black; text-align: left;margin-left:10px">

                        h. Kami memahami dan sepakat bahwa masa panen terhitung 7-8 bulan, terhitung sejak tanggal penanaman bibit ditambah waktu proses masa panen.
                    </span>
                    <br>
                    <span style="color: black; text-align: left;margin-left:10px">

                        i. Kami memahami dan sepakat untuk mendapatkan hasil panen senilai 70% untuk pemilik bibit dan 30% kepada pengelola atau PT. YAI.
                    </span>
                    <br>
                    <span style="color: black; text-align: left;margin-left:10px">

                        j. Kami memahami bahwa hasil panen di setiap cluster blok dapat berbeda-beda antara cluster blok satu dengan cluster blok lainnya karena faktor alam dan lingkungan yang ikut mempengaruhinya.
                    </span>

                    <br>
                    <span style="color: black; text-align: left;margin-left:10px">

                        k. Kami memahami sepenuhnya bahwa PT. YAI tidak menjamin nilai hasil panen bibit talas pratama karena harga umbi ditentukan oleh harga pasar pada saat panen dan nilai tonase umbi.


                    </span>

                    <br>
                    <span style="color: black; text-align: left;margin-left:10px">
                        l. Kami memahami dan menyetujui bahwa ilustrasi dalam presentasi merupakan proyeksi keuntungan berdasarkan pengalaman.
                    </span>

                    <br>

                    <span style="color: black; text-align: left;margin-left:10px">

                        m. Kami memahami dan menyetujui bahwa ketika masa panen, pemilik bibit bisa ikut terlibat dalam memasarkan/menjual umbi talas pratama miliknya dan PT. YAI memfasilitasi prosesnya termasuk ikut juga mencarikan pembelinya dengan ketentuan, pembeli diputuskan berdasarkan penawaran harga tertinggi.
                    </span>

                    <br>
                    <br>

                    <span style="color: black;  text-align: justify;">
                        5) Kami memahami dan menyetujui bahwa dana pembelian bibit yang sudah dibayarkan kepada PT. YAI tidak bisa ditarik kembali apabila telah melewati masa tenggang 7 (tujuh) hari, kecuali diperjual belikan/di-takeover kepada pihak ketiga dengan sepengetahuan PT. YAI.
                    </span>
                    <br><br>
                    <span style="color: black;  text-align: justify;">
                        6) Hal-hal yang dapat dianggap sebagai Force Majeure dalam perjanjian ini adalah perang, huru-hara besar yang melumpuhkan sendi-sendi pemerintahan negara, dan kebijakan pemerintah yang secara resmi berkaitan langsung dengan pelaksanaan pekerjaan ini dan secara wajar tidak dapat dihindari karena berada diluar kemampuan para pihak, sehingga salah satu pihak atau kedua pihak tidak dapat melaksanakan hak dan kewajibannya.
                    </span>
                    <br><br>
                    <span style="color: black;  text-align: justify;">
                        7) Segala permasalahan atau perselisihan faham dari akibat penanaman bibit talas pratama ini kedua belah pihak menempuh penyelesaian secara musyawarah kekeluargaan telebih dahulu akan tetapi apabila permasalahan tersebut tidak dapat diselesaikan dengan cara musyawarah kekeluargaan maka akan memili penyelesaian secara hukum di kepaniteraan Pengadilan Negeri.
                    </span>
                    <br><br>
                    <span style="color: black;  text-align: justify;">
                        8) Syarat dan ketentuan ini berlaku pada saat kami sebagai pemilik bibit menandatangani Akad Jual Beli Bibit talas pratama terlampir dalam sertifikat ini.
                    </span>
                    <br><br>
                </div>

            </div>
        </div>



    </div>

    <div class="bottom-nav">
        <a href="{{'dashboard'}}" class="active" style="text-decoration:underline;">
            <i class="fas fa-home"></i><br>
            Beranda
        </a>
        <a href="{{url('mitra/profil-mitra')}}" >
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