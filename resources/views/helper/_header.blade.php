<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::Inicio::</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="../assets/images/logo/apple-touch-icon.html">
    <link rel="shortcut icon" href="../assets/images/logo/logo2.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="../assets/css/animate.min.css" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/barra.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <div class="app header-default side-nav-dark">
        <div class="layout">
<!-- Header START -->
<div class="header navbar">
                <div class="header-container">
                    <div class="nav-logo">
                        <a href="home">
                            <div class="logo logo-dark" style="background-image: url('../assets/images/logo/logo.png')"></div>
                            <div class="logo logo-white" style="background-image: url('../assets/images/logo/logo-white.png')"></div>
                        </a>
                    </div>

                        
                    </ul>
                    <ul class="nav-right">
                        
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img img-fluid" src="../assets/images/avatars/thumb-13.jpg" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-md p-v-0">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item p-15">
                                            <div class="media-img">
                                                <img src="../assets/images/avatars/thumb-13.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold">{{ Auth::user()->name }}</span>
                                                <span class="sub-title">_______________</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="ti-settings p-r-10"></i>
                                        <span>Configuración</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-user p-r-10"></i>
                                        <span>Perfil</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-email p-r-10"></i>
                                        <span>Correo</span>
                                        <span class="badge badge-pill badge-success pull-right">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/logout')!!}">
                                        <i class="ti-power-off p-r-10"></i>
                                        <span>Salir</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="m-r-10">
                            <a class="quick-view-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-format-indent-decrease"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->
