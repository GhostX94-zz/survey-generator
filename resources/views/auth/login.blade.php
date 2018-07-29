<!DOCTYPE html>
<html>


<!-- Mirrored from themenate.com/applicator/dist/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jul 2018 19:40:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::Login::</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="assets/images/logo/apple-touch-icon.html">
    <link rel="shortcut icon" href="assets/images/logo/logo2.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout bg-gradient-info">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-md-7 d-none d-md-block">
                        <img class="img-fluid" src="assets/images/logo/logo2.png" alt="">
                        <div class="m-t-15 m-l-20">
                            <h1 class="font-weight-light font-size-35 text-white">!BIENVENIDO!</h1>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <div class="p-h-15 p-v-40">
                                    <h2>Ingresar</h2>
                                    <p class="m-b-15 font-size-13">Ingresar Credenciales</p>
                                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña">
                                        </div>
                                        <button type="submit" class="btn btn-block btn-lg btn-gradient-success">Entrar</button>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/vendor.js"></script>

    <script src="assets/js/app.min.js"></script>

    <!-- page js -->
    
</body>


<!-- Mirrored from themenate.com/applicator/dist/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jul 2018 19:40:33 GMT -->
</html>