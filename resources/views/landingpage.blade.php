
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

      <link rel='stylesheet' href='{{ asset('assets/vendor/fullcalendar/core/main.css') }}' />
      <link rel='stylesheet' href='{{ asset('assets/vendor/fullcalendar/daygrid/main.css') }}' />
      <link rel='stylesheet' href='{{ asset('assets/vendor/fullcalendar/timegrid/main.css') }}' />
      <link rel='stylesheet' href='{{ asset('assets/vendor/fullcalendar/list/main.css') }}' />
      <link rel="stylesheet" href="{{ asset('assets/vendor/mapbox/mapbox-gl.css') }}">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <link rel="stylesheet" href="{{ asset('css/cc.css') }}">
      <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
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
      <div class="mm-sidebar  sidebar-default ">
          <div class="mm-sidebar-logo d-flex align-items-center justify-content-between">
              <a href="../backend/index.html" class="header-logo">
                  <img src="{{ asset('img/Logo2.png') }}" class="img-fluid rounded-normal light-logo " alt="logo">
                  <img src="../assets/images/white-logo.png" class="img-fluid rounded-normal darkmode-logo" alt="logo">
              </a>
              <div>

              </div>
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
                              <span class="ml-2">Profil</span>
                              <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                              <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                          </a>
                      </li>
                      <li class="">
                          <a href="#ui" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg class="svg-icon" id="mm-ui-1" width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                      viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                  </svg>
                              </i>
                              <span class="ml-2">Data Kehutanan</span>
                              <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                              <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                          </a>

                      </li>
                      <li class="">
                          <a href="#form" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg class="svg-icon" id="mm-form-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                  </svg>
                              </i>
                              <span class="ml-2">Unit Kerja</span>
                              <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                              <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                          </a>

                      </li>
                  </ul>
              </nav>
              <div class="pt-5 pb-2"></div>
          </div>
      </div>
      <div class="mm-top-navbar">
          <div class="mm-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
              <div class="mm-navbar-logo d-flex align-items-center justify-content-between">
                  <i class="ri-menu-line wrapper-menu"></i>
                  <a href="../backend/index.html" class="header-logo">
                      <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                      <h4 class="ml-1"><b>SimpleD</b></h4>
                  </a>
                 </div>
                  <div class="mm-search-bar device-search m-auto">
                      <form action="#" class="searchbox">
                      <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                      <input type="text" class="text search-input" placeholder="Search here...">
                      </form>
                  </div>
                  <div class="d-flex align-items-center">
                      <div class="change-mode">
                          <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                              <div class="custom-switch-inner">
                                  <p class="mb-0"> </p>
                                  <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                  <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                      <span class="switch-icon-left">
                                          <svg class="svg-icon" id="h-moon" height="20" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                          </svg>
                                      </span>
                                      <span class="switch-icon-right">
                                          <svg class="svg-icon" id="h-sun" height="20" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                          </svg>
                                      </span>
                                  </label>
                              </div>
                          </div>
                      </div>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                      <i class="ri-menu-3-line"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                              <li class="nav-item nav-icon search-content">
                                  <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <svg class="svg-icon text-primary" id="h-suns" height="20" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                      </svg>
                                  </a>
                                  <div class="mm-search-bar mm-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                      <form action="#" class="searchbox p-2">
                                          <div class="form-group mb-0 position-relative">
                                          <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                          <a href="#" class="search-link"><i class="las la-search"></i></a>
                                          </div>
                                      </form>
                                  </div>
                              </li>
                              <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <svg class="svg-icon  text-primary" id="mm-mail-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                  <span class="bg-primary"></span>
                                  </a>
                                  <div class="mm-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                      <div class="card shadow-none m-0 border-0">
                                          <div class="card-body p-0 ">
                                          <div class="cust-title p-3">
                                              <h5 class="mb-0">All Messages</h5>
                                          </div>
                                          <div class="p-3">
                                              <a href="#" class="mm-sub-card">
                                                  <div class="media align-items-center">
                                                      <div class="">
                                                      <img class="avatar-40 rounded-small" src="../assets/images/user/1.jpg" alt="01">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                      <h6 class="mb-0">Barry Emma Watson <small class="badge badge-success float-right">New</small></h6>
                                                      <small class="float-left font-size-12">12:00 PM</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="mm-sub-card">
                                                  <div class="media align-items-center">
                                                      <div class="">
                                                      <img class="avatar-40 rounded-small" src="../assets/images/user/2.jpg" alt="02">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                      <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                      <small class="float-left font-size-12">20 Apr</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="mm-sub-card">
                                                  <div class="media align-items-center">
                                                      <div class="">
                                                      <img class="avatar-40 rounded-small" src="../assets/images/user/3.jpg" alt="03">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                      <h6 class="mb-0 ">Why do we use it? <small class="badge badge-success float-right">New</small></h6>
                                                      <small class="float-left font-size-12">1:24 PM</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="mm-sub-card" >
                                                  <div class="media align-items-center">
                                                      <div class="">
                                                      <img class="avatar-40 rounded-small" src="../assets/images/user/4.jpg" alt="04">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                      <h6 class="mb-0">Variations Passages <small class="badge badge-success float-right">New</small></h6>
                                                      <small class="float-left font-size-12">5:45 PM</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="mm-sub-card" >
                                                  <div class="media align-items-center">
                                                      <div class="">
                                                      <img class="avatar-40 rounded-small" src="../assets/images/user/5.jpg" alt="05">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                      <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                      <small class="float-left font-size-12">1 day ago</small>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>
                                          <a class="d-flex justify-content-center p-2 card-footer" href="#" role="button">
                                              View All
                                          </a>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                      <svg class="svg-icon text-primary" id="mm-bell-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                      <span class="bg-primary "></span>
                                  </a>
                                  <div class="mm-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <div class="card shadow-none m-0 border-0">
                                          <div class="card-body p-0 ">
                                          <div class="cust-title p-3">
                                              <h5 class="mb-0">All Notifications</h5>
                                          </div>
                                          <div class="p-3">
                                              <a href="#" class="mm-sub-card" >
                                                  <div class="media align-items-center">
                                                      <div class="">
                                                      <img class="avatar-40 rounded-small" src="../assets/images/user/1.jpg" alt="01">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                      <h6 class="mb-0">Emma Watson Barry <small class="badge badge-success float-right">New</small></h6>
                                                      <p class="mb-0">95 MB</p>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="mm-sub-card" >
                                                  <div class="media align-items-center">
                                                      <div class="">
                                                      <img class="avatar-40 rounded-small" src="../assets/images/user/2.jpg" alt="02">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                      <h6 class="mb-0 ">New customer is join</h6>
                                                      <p class="mb-0">Cyst Barry</p>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="mm-sub-card" >
                                                  <div class="media align-items-center">
                                                      <div class="">
                                                      <img class="avatar-40 rounded-small" src="../assets/images/user/3.jpg" alt="03">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                      <h6 class="mb-0 ">Two customer is left</h6>
                                                      <p class="mb-0">Cyst Barry</p>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="mm-sub-card" >
                                                  <div class="media align-items-center">
                                                      <div class="">
                                                      <img class="avatar-40 rounded-small" src="../assets/images/user/4.jpg" alt="04">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                      <h6 class="mb-0 ">New Mail from Fenny <small class="badge badge-success float-right">New</small></h6>
                                                      <p class="mb-0">Cyst Barry</p>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>
                                          <a class="d-flex justify-content-center p-2 card-footer" href="#" role="button">
                                              View All
                                          </a>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li class="nav-item nav-icon dropdown full-screen">
                                  <a href="#" class="nav-item nav-icon dropdown" id="btnFullscreen">
                                      <i class="max"><svg class="svg-icon  text-primary" id="d-3-max" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></i>
                                      <i class="min d-none"><svg class="svg-icon  text-primary" id="d-3-min" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"></path></svg></i>
                                  </a>
                              </li>
                              <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="nav-item nav-icon dropdown-toggle pr-0 search-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                      <img src="../assets/images/user/1.jpg" class="img-fluid avatar-rounded" alt="user">
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-primary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                          <a href="../app/user-profile.html">My Profile</a>
                                      </li>
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-primary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                          </svg>
                                          <a href="../app/user-profile-edit.html">Edit Profile</a>
                                      </li>
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-primary" id="h-03-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                          </svg>
                                          <a href="../app/user-account-setting.html">Account Settings</a>
                                      </li>
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-primary" id="h-04-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                          </svg>
                                          <a href="../app/user-privacy-setting.html">Privacy Settings</a>
                                      </li>
                                      <li class="dropdown-item  d-flex svg-icon border-top">
                                          <svg class="svg-icon mr-0 text-primary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                          </svg>
                                          <a href="../backend/auth-sign-in.html">Logout</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>

      <div>
        <div class="content-page">
            <div class="container">
                <div class="myBanner">
                    <div class="col align-self-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active" style="height:300px">
                            <a id="firsturl" href={{$firstUrl}}>
                            <img id="firstimage" class="img-fluid d-block mx-auto" src="{{$firstImage}}" alt="..." style="width:1110px; height:500px;">
                            </a>
                            <div class="carousel-caption  d-md-block">
                            <p class="title">{{$firstTitle}}</p>
                            </div>
                        </div>

                        <div class="carousel-item" style="height:300px">
                            <a id="secondurl" href={{$secondUrl}}>
                            <img id="secondimage" class="img-fluid d-block mx-auto" src="{{$secondImage}}" alt="..." style="width:1110px; height:500px;">
                            </a>
                            <div class="carousel-caption  d-md-block">
                            <p class="title">{{$secondTitle}}</p>
                            </div>
                        </div>

                        <div class="carousel-item" style="height:300px">
                            <a id="thirdurl" href={{$thirdUrl}}>
                            <img id="thirdimage" class="img-fluid d-block mx-auto" src="{{$thirdImage}}" alt="..." style="width:1110px; height:500px;">
                            </a>
                            <div class="carousel-caption  d-md-block">
                            <p class="title">{{$thirdTitle}}</p>
                            </div>
                        </div>
                        </div>

                        <a id="previous" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a id="next" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

            <div class="second-content pt-5">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
</div>
</div>
 

    <!-- Wrapper End-->
    <footer class="mm-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1">
                        Copyright
                        <script>document.write(new Date().getFullYear())</script>© <a href="#" class="">SimpleD</a>
                        All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/js/backend-bundle.min.js') }}"></script>

    <!-- Flextree Javascript-->
    <script src="{{ asset('assets/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('assets/js/tree.js') }}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('assets/js/table-treeview.js') }}"></script>

    <!-- Masonary Gallery Javascript -->
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>

    <!-- Mapbox Javascript -->
    <script src="{{ asset('assets/js/mapbox-gl.js') }}"></script>
    <script src="{{ asset('assets/js/mapbox.js') }}"></script>

    <!-- Fullcalender Javascript -->
    <script src='{{ asset('assets/vendor/fullcalendar/core/main.js') }}'></script>
    <script src='{{ asset('assets/vendor/fullcalendar/daygrid/main.js') }}'></script>
    <script src='{{ asset('assets/vendor/fullcalendar/timegrid/main.js') }}'></script>
    <script src='{{ asset('assets/vendor/fullcalendar/list/main.js') }}'></script>

    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="{{ asset('assets/js/vector-map-custom.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/customizer.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/chart-custom.js') }}"></script>
    <script src="{{ asset('assets/js/charts/01.js') }}"></script>
    <script src="{{ asset('assets/js/charts/02.js') }}"></script>

    <!-- slider JavaScript -->
    <script src="{{ asset('assets/js/slider.js') }}"></script>

    <!-- Emoji picker -->
    <script src="{{ asset('assets/vendor/emoji-picker-element/index.js') }}" type="module"></script>

    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/app.js') }}"></script>  </body>
</html>

