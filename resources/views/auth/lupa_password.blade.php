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



</head>

<body class="background_login" style="background-image: url('{{ asset('public/FOTO/hijau.jpg') }}');">
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
                            <img src="{{url('public/logo')}}/LOGO YAFO hijau.png" class="logo" alt="" height="120px" width="150px">

                        </center>
                        <h1 class="fs-4 text-center fw-bold mb-4" style="color: green;">LUPA PASSWORD</h1>
                       
                        @if(session()->has('error'))
                        <div class="alert alert-danger" role="alert" id="notif">

                            <span data-notify="icon" class="fa fa-bell"></span>
                            <span data-notify="title">Gagal</span> <br>
                            <span data-notify="message">{{session()->get('error')}}</span>
                        </div>
                        @endif
                

                        <div class="card-body login-card-body">

                            <p class="login-box-msg">Anda lupa password? disini anda dapat membuat password baru.</p>

                            <form action="{{url('lupa-password')}}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="username" value="{{ old('ussername')}}" id="username" placeholder="Username">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                  
                                        <button type="submit" class="btn btn-success btn-block">Minta Password Baru</button>
                                </div>
                            </form>
                            <br>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="fs-4 mb-0 fw-bold">Sudah punya akun?</p>
                                <a class="text-success fw-bold ms-2" ></a>
                                <a href="{{url('login')}}">
                                <button class="btn btn-success btn-block">LOGIN</button>

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