
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>KPH 2 Pematang Siantar</title>

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
            {{-- Sidebar --}}
            <div class="mm-sidebar sidebar-default" style="fixed-left">
                <div class="mm-sidebar-logo d-flex align-items-center justify-content-between">
                    <a href="{{ route('home4') }}" class="header-logo">
                         <img src="{{ asset('img/logokph.png') }}" class="img-fluid rounded-normal light-logo " alt="logo">
                    </a>
                    <div class="side-menu-bt-sidebar">
                        <i class="las la-bars wrapper-menu"></i>
                    </div>
                </div>
                <div class="data-scrollbar" data-scroll="1">
                    <nav class="mm-sidebar-menu">
                        <ul id="mm-sidebar-toggle" class="side-menu">
                            <li class="">
                                <a href="{{ route('home4') }}" class="collapsed svg-icon">
                                    <i class="">
                                        <img src="{{ asset('icon/home.png') }}" alt="icon" width="20">
                                    </i>

                                    <span class="ml-2">Beranda</span>

                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                            </li>

                            <li class="">
                                <a href="{{ route('showgaleriunitkerja3') }}" class="collapsed svg-icon">
                                    <i class="">
                                        <img src="{{ asset('icon/galery.png') }}" alt="icon" width="20">
                                    </i>

                                    <span class="ml-2">Kelola Galeri UPT</span>

                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                            </li>
                        </ul>


                    </nav>
                    <div class="pt-5 pb-2"></div>
                </div>
            </div>
            {{-- EndofSideBar --}}

            <div class="mm-top-navbar" style="background-color:#0C3310; " >
                <div class="mm-navbar-custom">
                    <nav class="navbar navbar-expand-lg p-0 ">
                        <div class="row align-items-center justify-content-between">
                            <div  class="col-xs-12 col-sm-2 col-md-2 navbar-text">
                                <img src="img/Logo3.png" class="img-fluid rounded-normal">
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-10 ">
                                <h4>UPT. KESATUAN PENGELOLAAN HUTAN WILAYAH-II
                                    PEMATANG SIANTAR</h4>
                            </div>
                        </div>
                        <div class="row">
                            <i class="ri-menu-line wrapper-menu"></i>
                            <div id="navbarSupportedContent" >
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                    <!-- Login Button -->
                                    <li class="nav-item nav-icon dropdown">
                                        <a href="#" class="nav-item nav-icon dropdown-toggle pr-2 search-toggle"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img src="{{ asset('img/change.png') }}" class="img-fluid avatar-rounded"
                                                alt="user">
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <li class="dropdown-item d-flex svg-icon">
                                                <svg class="svg-icon mr-0 text-primary" id="h-01-p" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                <a href="{{ route('password-edit') }}">Ganti Password</a>
                                            </li>
                                            <li class="dropdown-item  d-flex svg-icon border-top">
                                                <svg class="svg-icon mr-0 text-primary" id="h-05-p" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                                </svg>
                                                <a href="{{ route('logout') }}">Keluar</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>


