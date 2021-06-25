
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SimpleD | Responsive Bootstrap 4 Admin Dashboard Template</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/backend-plugin.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/backend.css?v=1.0.0') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/@icon/dripicons/dripicons.css') }}">

      <link rel='stylesheet' href="{{ asset('assets/vendor/fullcalendar/core/main.css') }}" />
      <link rel='stylesheet' href="{{ asset('assets/vendor/fullcalendar/daygrid/main.css') }}" />
      <link rel='stylesheet' href="{{ asset('assets/vendor/fullcalendar/timegrid/main.css') }}" />
      <link rel='stylesheet' href="{{ asset('assets/vendor/fullcalendar/list/main.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/vendor/mapbox/mapbox-gl.css') }}">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <link rel="stylesheet" href="{{ asset('css/cc.css') }}">
      <link rel="stylesheet" href="{{ asset('styles/main.css')}}">
      <link rel="stylesheet" href="{{ asset('styles/style.css')}}">
      <link rel="stylesheet" href="{{ asset('styles/animate.min.css')}}">
      <link rel="stylesheet" href="{{ asset('styles/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{ asset('styles/lightbox.min.css')}}">
      <link rel="stylesheet" href="{{ asset('styles/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{ asset('styles/ionicons/css/ionicons.min.css')}}">

      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

<!-- leaflet -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
    </script>

    <script src="https://unpkg.com/esri-leaflet@3.0.2/dist/esri-leaflet.js"
        integrity="sha512-myckXhaJsP7Q7MZva03Tfme/MSF5a6HC2xryjAM4FxPLHGqlh5VALCbywHnzs2uPoF/4G/QVXyYDDSkp5nPfig=="
        crossorigin="">
    </script>
    <style>
            blockquote {
                background: #f9f9f9;
                border-left: 10px solid #ccc;
                margin: 1.5em 10px;
                padding: 0.5em 10px;
                quotes: "\201C""\201D""\2018""\2019";
            }
            blockquote:before {
                color: #ccc;
                content: open-quote;
                font-size: 4em;
                line-height: 0.1em;
                margin-right: 0.25em;
                vertical-align: -0.4em;
            }
            blockquote p {
                display: inline;
                font-style: italic;
            }
            blockquote h6 {
                font-weight: 700;
                padding: 0;
                margin: 0 0 .25rem;
            }
            .child-comment {
                padding-left: 50px;
            }
    </style>

    </head>
    <body class="  ">
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">
            <div class="navbar-static-top card " style="background-color:#0C3310; " >
                <div class="mm-navbar-custom">
                    <div class="row">
                        <div  class="col-md-2 col-sm-2" style="padding-left:150px;">
                            <img src="img/logo1.png" alt="">
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <p class="text-center" style="font-family:Balthazar; font-size:35px; padding-right:100px;color:white;">UPT. KESATUAN PENGELOLAAN HUTAN WILAYAH-II</p>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <div class="mm-navbar-logo d-flex align-items-center justify-content-between">
                            <i class="ri-menu-line wrapper-menu"></i>
                        </div>
                        <div class="ml-auto">
                            <div id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                    <!-- Login Button -->
                                    <li class="nav-item nav-icon">
                                        <a href="{{ route('login') }}" class="nav-item nav-icon" id="btnLogin">
                                            <button type="submit" class="btn" style="background-color: #99F07A;">Masuk</button>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="mm-sidebar sidebar-default" style="float:left; position:fixed;">
                <div class="mm-sidebar-logo d-flex align-items-center justify-content-between">
                    <a href="../backend/index.html" class="header-logo">
                        <img src="{{ asset('img/newlogo.png') }}" class="img-fluid rounded-normal light-logo " alt="logo">
                        <img src="{{ asset('img/newlogo.png') }}" class="img-fluid rounded-normal darkmode-logo" alt="logo">
                    </a>
                    <div class="side-menu-bt-sidebar">
                        <i class="las la-bars wrapper-menu"></i>
                    </div>
                </div>
                <div class="data-scrollbar" data-scroll="1">
                    <nav class="mm-sidebar-menu">
                        <ul id="mm-sidebar-toggle" class="side-menu">
                            <li class="">
                                <a href="#Dashboards" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                    <i class="">
                                        <img src="icon/home.png" alt="icon" width="20">
                                    </i>

                                    <span class="ml-2">Beranda</span>

                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                            </li>

                            <li class="">
                                <a href="#app" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                    <i>
                                        <img src="icon/profil.png" alt="icon" width="20">
                                    </i>
                                    <span class="ml-2">Profil UPT. KPH-II</span>
                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                                <ol id="app" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                                    <li class="">
                                        <a href="#user" class="collapsed svg-icon">
                                            <i class="">
                                                <img src="icon/visimisi.png" alt="icon" width="20">
                                            </i>
                                            <span class="">Visi dan Misi</span>
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="../app/chat.html" class="svg-icon">
                                            <i class="">
                                                <img src="icon/sejarah.png" alt="icon" width="20">
                                            </i><span class="">Sejarah</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#strukturorg" class="svg-icon">
                                            <i class="">
                                                <img src="icon/struktur.png" alt="icon" width="20">
                                            </i><span class="">Struktur Organisasi</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../app/todo.html" class="svg-icon">
                                            <i class="">
                                                <img src="icon/tugas dan fungsi.png" alt="icon" width="20">
                                            </i><span class="">Tugas dan Fungsi</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="svg-icon">
                                            <i class="">
                                                <img src="icon/data.png" alt="icon" width="20">
                                            </i><span class="">Data SDM</span>
                                        </a>
                                    </li>
                                </ol>
                            </li>

                            <li class="">
                                <a href="#uker" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                    <i>
                                        <img src="icon/uker.png" alt="icon" width="20">
                                    </i>
                                    <span class="ml-2">Unit Kerja</span>
                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                                <ol id="uker" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                                    <li class="">
                                        <a href="#unit" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                            <i class="">
                                                <img src="icon/unit.png" alt="icon" width="20">
                                            </i>
                                            <span class="">Unit VI Simalungun</span>
                                            <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                            <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                        </a>
                                        <ul id="unit" class="submenu collapse" data-parent="#uker">
                                            <li class="">
                                                <a href="../app/user-profile.html" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data Umum</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data Ekonomi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data Ekologi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data SDM</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </li>

                                    <li class="">
                                        <a href="#unit2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                            <i class="">
                                                <img src="icon/unit.png" alt="icon" width="20">
                                            </i>
                                            <span class="">Unit IX Sergai</span>
                                            <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                            <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                        </a>
                                        <ul id="unit2" class="submenu collapse" data-parent="#uker">
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data Umum</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data Ekonomi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data Ekologi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data SDM</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="#unit3" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                            <i class="">
                                                <img src="icon/unit.png" alt="icon" width="20">
                                            </i>
                                            <span class="">Unit X Batubara</span>
                                            <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                            <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                        </a>
                                        <ul id="unit3" class="submenu collapse" data-parent="#uker">
                                            <li class="">
                                                <a href="../app/user-profile.html" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data Umum</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data Ekonomi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data Ekologi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data SDM</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="#unit4" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                            <i class="">
                                                <img src="icon/unit.png" alt="icon" width="20">
                                            </i>
                                            <span class="">Unit XII Simalungun</span>
                                            <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                            <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                        </a>
                                        <ul id="unit4" class="submenu collapse" data-parent="#uker">
                                            <li class="">
                                                <a href="../app/user-profile.html" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data Umum</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data Ekonomi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data Ekologi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <img src="icon/data.png" alt="icon" width="20">
                                                    </i><span class="">Data SDM</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                </ol>
                            </li>

                            <li class="">
                                <a href="#Dashboards" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                    <i class="">
                                        <img src="icon/sosial.png" alt="icon" width="20">
                                    </i>

                                    <span class="ml-2">Perhutanan Sosial</span>

                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                            </li>


                            <li class="">
                                <a href="#Dashboards" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                    <i class="">
                                        <img src="icon/peraturan.png" alt="icon" width="20">
                                    </i>

                                    <span class="ml-2">Peraturan Perundangan</span>

                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                            </li>
                        </ul>


                    </nav>
                    <div class="pt-5 pb-2"></div>
                </div>
            </div>



