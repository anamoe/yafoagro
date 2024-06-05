<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Lupa Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />


    <link rel="stylesheet" href="{{asset('public/arfa/vendor/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('public/arfa/toastr/toastr.min.css') }}">


    <style>
        .input-border-green .form-control {
            border-color: green;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            /* Adjust the value as needed */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

        }
    </style>
</head>

<body class="background_login" style="background:green ;">

    <div class="header">
        <div class="container">
            <div class="header-body text-center mb-2 mt-5">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-2">
                        <!-- <h1 class="fw-bold mt-5 text-black" style="font-size: 40px;">YAFOARGO</h1> -->
                        <p class="fw-bold mt-2 text-white" style="font-size: 13px;"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="container">
        <div class="row justify-content-sm-center h-100 align-items-center">
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <center>
                            <img src="{{url('public/logo')}}/LOGO YAFO aja.png" class="logo" alt="" height="100px" width="60px">

                        </center>
                        <h1 class="fs-4 text-center fw-bold mb-4" style="color: green;">YAFO AGRO</h1>
                        <h4 class="fs-6 text-center fw-bold mt-1" style="color: green;">Pertanian Dalam Genggaman</h4>
                        @if(session()->has('error'))
                        <div class="alert alert-danger" role="alert" id="notif">

                            <span data-notify="icon" class="fa fa-bell"></span>
                            <span data-notify="title">Gagal</span> <br>
                            <span data-notify="message">{{session()->get('error')}}</span>
                        </div>
                        @endif


                        <div class="card-body login-card-body">

                            <center>
                                <h6>
                                    <p style="color: green;" class="login-box-msg">Ubah Kata Sandi</p>
                                </h6>
                            </center>

                            <form action="{{url('lupa-password')}}" method="post">
                                @csrf

                                <div class="mb-3">

                                    <label for="username" style="color: green;">Masukkan nama pengguna</label>
                                    <div class="input-group mb-3 input-border-green">
                                        <input type="text" class="form-control" name="username" value="{{ old('username')}}" id="username">
                                    </div>
                                </div>
                                <div class="mt-4 d-grid gap-2 ">
                                    <button type="submit" style="color: #FDBB26;width: 100%;background-color:green; font-weight:bold;" class="btn btn-success btn-block">Reset</button>
                                </div>

                                <br>
                                <div class="d-flex align-items-center">
                                    <a class="text-success  ms-0"></a>
                                    <a href="{{url('login')}}">
                                        <p class="fs-8 mb-0">Sudah punya akun? Klik disini</p>
                                    </a>
                                </div>
                        </div>


                    </div>

                </div>
            </div>
    </section>
    <script src="{{url('public/arfa/toastr')}}/toastr.min.js"></script>

    <script>
        toastr.options.timeOut = 1500;
        toastr.options.showMethod = 'slideDown';
        toastr.options.hideMethod = 'slideUp';
        toastr.options.closeMethod = 'slideUp';
        @if(session()->has('success'))
        toastr.success('{{session()->get("success")}}')
        @elseif(session()->has('error'))
        toastr.error('{{session()->get("error")}}')
        @endif
    </script>
</body>

</html>