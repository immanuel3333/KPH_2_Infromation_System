
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
            <div class="navbar-static-top card" >
                <div class="mm-navbar-custom">
                    <div class="row">
                        <div  class="col-md-2 col-sm-2" style="padding-left:150px;">
                            <img src="img/logo1.png" alt="">
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <p class="text-center" style="font-family:Balthazar; font-size:35px; padding-right:100px;">UPT. KESATUAN PENGELOLAAN HUTAN WILAYAH-II</p>
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

            <div class="mm-sidebar sidebar-default">
                <div class="mm-sidebar-logo d-flex align-items-center justify-content-between">
                    <a href="../backend/index.html" class="header-logo">
                        <img src="{{ asset('img/newlogo.png') }}" class="img-fluid rounded-normal light-logo " alt="logo">
                        <img src="../assets/images/white-logo.png" class="img-fluid rounded-normal darkmode-logo" alt="logo">
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
                                        <svg class="svg-icon" id="mm-dash" width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                    </i>

                                    <span class="ml-2">Beranda</span>

                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                            </li>

                            <li class="">
                                <a href="#app" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                    <i>
                                        <svg class="svg-icon" id="mm-app-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                        </svg>
                                    </i>
                                    <span class="ml-2">Profil UPT. KPH-II</span>
                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                                <ol id="app" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                                    <li class="">
                                        <a href="#user" class="collapsed svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="mm-user-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </i>
                                            <span class="">Sejarah</span>
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="../app/chat.html" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="mm-chat-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                            </i><span class="">Struktur Organisasi</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../app/chat.html" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="mm-chat-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                            </i><span class="">Visi dan Misi</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../app/todo.html" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="mm-todo-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                                </svg>
                                            </i><span class="">Tugas dan Fungsi</span>
                                        </a>
                                    </li>
                                </ol>
                            </li>

                            <li class="">
                                <a href="#Dashboards" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                    <i class="">
                                        <svg class="svg-icon" id="mm-dash" width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                    </i>

                                    <span class="ml-2">Peraturan Perundangan</span>

                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                            </li>

                            <li class="">
                                <a href="#uker" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                    <i>
                                        <svg class="svg-icon" id="mm-app-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                        </svg>
                                    </i>
                                    <span class="ml-2">Unit Kerja</span>
                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                                <ol id="uker" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                                    <li class="">
                                        <a href="#unit" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                            <i class="">
                                                <svg class="svg-icon" id="mm-user-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </i>
                                            <span class="">Unit VI Simalungun</span>
                                            <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                            <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                        </a>
                                        <ul id="unit" class="submenu collapse" data-parent="#uker">
                                            <li class="">
                                                <a href="../app/user-profile.html" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-1" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </i><span class="">Data Umum</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-2" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                                        </svg>
                                                    </i><span class="">Data Ekonomi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-3" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                        </svg>
                                                    </i><span class="">Data Ekologi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#sdm1" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                                    <i>
                                                        <svg class="svg-icon" id="mm-app-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                                        </svg>
                                                    </i>
                                                    <span class="ml-2">Data Sumber Daya Manusia</span>
                                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                                </a>
                                                <ol id="sdm1" class="submenu collapse" data-parent="#sdm1">
                                                    <li class="">
                                                        <a href="#user" class="collapsed svg-icon">
                                                            <i class="">
                                                                <svg class="svg-icon" id="mm-user-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                                </svg>
                                                            </i>
                                                            <span class="">Data Kepegawaian</span>
                                                        </a>

                                                    </li>
                                                </ol>
                                            </li>

                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-3" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                        </svg>
                                                    </i><span class="">Perhutanan Sosal</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </li>

                                    <li class="">
                                        <a href="#unit2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                            <i class="">
                                                <svg class="svg-icon" id="mm-user-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </i>
                                            <span class="">Unit IX Serdang Bedagai</span>
                                            <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                            <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                        </a>
                                        <ul id="unit2" class="submenu collapse" data-parent="#uker">
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-1" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </i><span class="">Data Umum</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-2" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                                        </svg>
                                                    </i><span class="">Data Ekonomi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-3" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                        </svg>
                                                    </i><span class="">Data Ekologi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#sdm2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                                    <i>
                                                        <svg class="svg-icon" id="mm-app-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                                        </svg>
                                                    </i>
                                                    <span class="ml-2">Data Sumber Daya Manusia</span>
                                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                                </a>
                                                <ol id="sdm2" class="submenu collapse" data-parent="#sdm2">
                                                    <li class="">
                                                        <a href="#user" class="collapsed svg-icon">
                                                            <i class="">
                                                                <svg class="svg-icon" id="mm-user-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                                </svg>
                                                            </i>
                                                            <span class="">Data Kepegawaian</span>
                                                        </a>

                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-3" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                        </svg>
                                                    </i><span class="">Perhutanan Sosal</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="#unit3" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                            <i class="">
                                                <svg class="svg-icon" id="mm-user-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </i>
                                            <span class="">Unit X Batubara</span>
                                            <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                            <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                        </a>
                                        <ul id="unit3" class="submenu collapse" data-parent="#uker">
                                            <li class="">
                                                <a href="../app/user-profile.html" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-1" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </i><span class="">Data Umum</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-2" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                                        </svg>
                                                    </i><span class="">Data Ekonomi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-3" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                        </svg>
                                                    </i><span class="">Data Ekologi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#sdm3" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                                    <i>
                                                        <svg class="svg-icon" id="mm-app-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                                        </svg>
                                                    </i>
                                                    <span class="ml-2">Data Sumber Daya Manusia</span>
                                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                                </a>
                                                <ol id="sdm3" class="submenu collapse" data-parent="#sdm3">
                                                    <li class="">
                                                        <a href="#user" class="collapsed svg-icon">
                                                            <i class="">
                                                                <svg class="svg-icon" id="mm-user-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                                </svg>
                                                            </i>
                                                            <span class="">Data Kepegawaian</span>
                                                        </a>

                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-3" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                        </svg>
                                                    </i><span class="">Perhutanan Sosal</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="#unit4" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                            <i class="">
                                                <svg class="svg-icon" id="mm-user-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </i>
                                            <span class="">Unit XII Simalungun</span>
                                            <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                            <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                        </a>
                                        <ul id="unit4" class="submenu collapse" data-parent="#uker">
                                            <li class="">
                                                <a href="../app/user-profile.html" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-1" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </i><span class="">Data Umum</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-2" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                                        </svg>
                                                    </i><span class="">Data Ekonomi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-3" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                        </svg>
                                                    </i><span class="">Data Ekologi</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#sdm4" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                                    <i>
                                                        <svg class="svg-icon" id="mm-app-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                                        </svg>
                                                    </i>
                                                    <span class="ml-2">Data Sumber Daya Manusia</span>
                                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                                </a>
                                                <ol id="sdm4" class="submenu collapse" data-parent="#sdm4">
                                                    <li class="">
                                                        <a href="#user" class="collapsed svg-icon">
                                                            <i class="">
                                                                <svg class="svg-icon" id="mm-user-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                                </svg>
                                                            </i>
                                                            <span class="">Data Kepegawaian</span>
                                                        </a>

                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="">
                                                <a href="#" class="svg-icon">
                                                    <i class="">
                                                        <svg class="svg-icon" id="mm-user-1-3" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                        </svg>
                                                    </i><span class="">Perhutanan Sosal</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                </ol>
                            </li>

                        </ul>


                    </nav>
                    <div class="pt-5 pb-2"></div>
                </div>
            </div>
  


