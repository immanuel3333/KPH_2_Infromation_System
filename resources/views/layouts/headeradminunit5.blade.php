
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SimpleD | Responsive Bootstrap 4 Admin Dashboard Template</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
   <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.1.1.min.js')}}"></script>

<!-- leaflet -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
    </script>

    <script src="https://unpkg.com/esri-leaflet@3.0.2/dist/esri-leaflet.js"
        integrity="sha512-myckXhaJsP7Q7MZva03Tfme/MSF5a6HC2xryjAM4FxPLHGqlh5VALCbywHnzs2uPoF/4G/QVXyYDDSkp5nPfig=="
        crossorigin="">
    </script>

    <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>



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

            .third-level-menu
		{
		    position: absolute;
		    top: 0;
		    right: -250px;
		    width: 250px;
		    list-style: none;
		    padding: 0;
		    margin: 0;
		    display: none;
		}

		.third-level-menu > li
		{
		    /*height: 30px;*/
		    background: #999999;
		}
		.third-level-menu > li:hover { background: #CCCCCC; }

		.second-level-menu
		{
		    position: absolute;
		    top: 30px;
		    left: 0;
		    width: 250px!important;
		    list-style: none;
		    padding: 0;
		    margin: 0;
		    display: block;
		    /*bottom: 30px;*/
		}

		.second-level-menu > li
		{
		    position: relative;
		    /*height: 30px;*/
		    /*background: #999999;*/
		}
		/*.second-level-menu > li:hover { background: #CCCCCC; }*/

		.top-level-menu
		{
		    list-style: none;
		    padding: 0;
		    margin: 0;
		}

		.top-level-menu > li
		{
		    position: relative;
		    float: left;
		    height: 30px;
		    /*width: 150px;*/
		    /*background: #999999;*/
		}
		/*.top-level-menu > li:hover { background: #CCCCCC; }*/

		.top-level-menu li:hover > ul
		{
		    /* On hover, display the next level's menu */
		    display: inline;
		}


		/* Menu Link Styles */

		.top-level-menu a /* Apply to all links inside the multi-level menu */
		{
		    font: bold 14px Arial, Helvetica, sans-serif;
		    color: #FFFFFF;
		    text-decoration: none;
		    padding: 0 0 0 10px;

		    /* Make the link cover the entire list item-container */
		    display: block;
		    line-height: 30px;
		}
		.top-level-menu a:hover { color: #000000; }


        .footer .footer_top {
            padding-top: 145px;
            padding-bottom: 129px;
            background: #3D6008 !important;
        }
        .footer .footer_top .footer_widget p {
            color: #ffffff!important;
        }
        .boxed-btn3 {
            background: linear-gradient(to right, #095d02 0%, #68c05d 100%) !important;
        }

        .Appointment .book_btn a {
        background: #0d4701 !important;
        }

        .owl-nav{
            display: none;
        }

        a.learn_more {
            color: #54d250 !important;
            font-size: 16px;
        }
        .service_area {
            background: #3bbb29 !important;
        }
        .service_area .col-xl-4:nth-child(2) .single_service {
            background: #1c940b !important;
        }
        a{
            color: black !important;
        }
        p{
            color: black !important;
        }
        .main-menu ul li .submenu {
            background: #2bbf34 !important;
        }
        .main-left {
            /*background: #2bbf34 !important;*/
            text-align: left!important;
            padding-left:10px;
        }

        .pagination {
          display: inline-block;
        }

        .pagination a {
          color: black;
          float: left;
          padding: 8px 16px;
          text-decoration: none;
        }

        .pagination a.active {
          background-color: black;
          color: black;
        }

        .header-area .main-header-area .main-menu ul li a {
            font-size: 14px!important;
        }
        ul.nav li a{
            color: black!important;
        }
        ul li:hover{
            background-color: #61ad09;

        }

            /* body{
            background: url('img/backgroundhead.png');
            background-size:500px;
            background-repeat: repeat-y;
            background-position:800px ; */


         }
    </style>

    </head>
    <body>
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">
            <header>
                <div class="header-area "  >

                    <!-- <div id="sticky-header" class="main-header-area" style="background-color: #bdfaa7!important"> -->

                    <div id="sticky-header" class="main-header-area"  style="background: url('img/backgroundhead.png');(to right, #095d02 0%, #68c05d 100%) !important">

                            <div class="mm-navbar-logo d-flex align-items-center justify-content-between">
                                <i class="ri-menu-line wrapper-menu"></i>
                            </div>

                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-3">
                                    <div class="logo">
                                        <a href="index">
                                            <img src="{{ asset('img/logo1.png')}}" alt="" class="center" style="padding-left: 40px">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9">
                                    <div class="main-left"> <h1 style="font-family:Balthazar; font-size:32px; color:white;">UPT. KESATUAN PENGELOLAAN HUTAN WILAYAH-II</h1><center><h5 style="font-family:Balthazar;  color:white;">Tersebar Di Tingkat Tapak Terkendali di Pusat</h5></center></div>
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>

                                        </nav>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>


            </header>
            <!-- header-end -->

            <div class="mm-sidebar sidebar-default" style="fixed-left">
                <div class="mm-sidebar-logo d-flex align-items-center justify-content-between">
                    <a href="{{ route('home2') }}" class="header-logo">
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
                                <a href="{{ route('home5') }}" class="collapsed svg-icon">
                                    <i class="">
                                        <img src="{{ asset('icon/home.png') }}" alt="icon" width="20">
                                    </i>

                                    <span class="ml-2">Beranda</span>

                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                            </li>

                            <li class="">
                                <a href="{{ route('showgaleriunitkerja4') }}" class="collapsed svg-icon">
                                    <i class="">
                                        <img src="{{ asset('icon/galery.png') }}" alt="icon" width="20">
                                    </i>

                                    <span class="ml-2">Kelola Galeri UPT</span>

                                    <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                </a>
                            </li>

                            <li class="">
                                <a href="{{ route('logout') }}" >
                                    <span class="ml-2">Logout </span>
                                </a>
                            </li>
                        </ul>


                    </nav>
                    <div class="pt-5 pb-2"></div>
                </div>
            </div>



