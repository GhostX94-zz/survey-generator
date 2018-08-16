<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::Ver Encuestas::</title>

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
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <div class="app header-default side-nav-dark">
        <div class="layout" style="background-color:  rgb(205, 231, 199);">
<!-- Header START -->
<div class="header navbar">
<div class="header-container" style="background-image: linear-gradient(to top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 65%, rgba(0, 0, 0, 0.4) 100%), url('assets/images/logo/fondo.png');
    background-size: cover;
    background-position: center;
    color: rgba(255, 255, 255, 1);">
                    <div class="nav-logo">
                        <a href="home">
                            
                        </a>
                    </div>

                        
                    </ul>
                    <ul class="nav-right">
                        
                        
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img img-fluid" src="assets/images/avatars/thumb-13.jpg" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-md p-v-0">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item p-15">
                                            <div class="media-img">
                                                <img src="assets/images/avatars/thumb-13.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold">Externo</span>
                                                <span class="sub-title">_______________</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{!!URL::to('/logout')!!}">
                                        <i class="ti-power-off p-r-10"></i>
                                        <span>Salir</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->