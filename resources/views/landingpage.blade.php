
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
    
      <link rel="stylesheet" href="{{ asset('css/cc.css') }}">
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
                  <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
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
      </div>       <div class="mm-top-navbar">
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
      <div class="content-page">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="d-flex align-items-center justify-content-between welcome-content">
                <div class="navbar-breadcrumb">
                    <h4 class="mb-0 font-weight-700">Welcome To Dashboard</h4>
                </div>
                <div class="">
                    <a class="btn btn-primary button-icon" target="_blank" href="#">View Detail</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mm-cart-image text-danger">
                                    <svg class="svg-icon svg-danger" width="50" height="52" id="h-01"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M20.488 10H14V3.512A9.025 9.025 0 0120.488 9z" />
                                    </svg>
                                </div>

                                <div class="mm-cart-text">
                                    <h2 class="font-weight-700">12k</h2>
                                    <p class="mb-0 text-danger">Total sale</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mm-cart-image text-success">
                                    <svg class="svg-icon svg-success mr-4" width="50" height="52" id="h-02"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div class="mm-cart-text">
                                    <h2 class="font-weight-700">250</h2>
                                    <p class="mb-0 text-success">Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mm-cart-image text-primary">
                                    <svg class="svg-icon svg-blue mr-4" id="h-03" width="50" height="52"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div class="mm-cart-text">
                                    <h2 class="font-weight-700">25k</h2>
                                    <p class="mb-0 text-primary">Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="mm-cart-image text-warning">
                                    <svg class="svg-icon svg-warning mr-4" id="h-04" width="50" height="52"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                    </svg>
                                </div>
                                <div class="mm-cart-text">
                                    <h2 class="font-weight-700">200</h2>
                                    <p class="mb-0 text-warning">Visitors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Statistics</h4>
                            </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg btn btn-outline-primary"
                                        id="dropdownMenuButton2" data-toggle="dropdown">
                                        Monthly<i class="ri-arrow-down-s-line ml-1"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#">Daily</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="chart-01">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height rule-box">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">IP Exclusions</h4>
                            </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <a href="#" class="btn btn-outline-primary view-more">View More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="perfomer-lists m-0 p-0">
                                <li class="d-flex mb-3 align-items-center">
                                    <div class="top-block-one d-flex align-items-center justify-content-between">
                                        <div class="bg-primary icon mm-icon-box mr-0 rounded">
                                            <svg class="svg-icon fill-none" width="35" height="35" id="d-1-g"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="media-support-info ml-3">
                                        <h5>Anonymous</h5>
                                        <p class="mb-0 font-size-14 text-primary">Creative performance</p>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <h4 class="text-danger"><b>268</b></h4>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 align-items-center">
                                    <div class="top-block-one d-flex align-items-center justify-content-between">
                                        <div class="bg-info icon mm-icon-box mr-0 rounded">
                                            <svg class="svg-icon fill-none" width="35" height="35" id="d-1-c"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="media-support-info ml-3">
                                        <h5>Excessive Clicking</h5>
                                        <p class="mb-0 font-size-14 text-primary">Media performance</p>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <h4 class="text-danger"><b>4342</b></h4>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 align-items-center">
                                    <div class="top-block-one d-flex align-items-center justify-content-between">
                                        <div class="bg-skyblue icon mm-icon-box mr-0 rounded">
                                            <svg class="svg-icon fill-none" width="35" height="35" id="d-1-p"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="media-support-info ml-3">
                                        <h5>Premium Impressions</h5>
                                        <p class="mb-0 font-size-14 text-primary">Reach performance</p>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <h4 class="text-danger"><b>6565</b></h4>
                                    </div>
                                </li>
                                <li class="d-flex mb-3 align-items-center">
                                    <div class="top-block-one d-flex align-items-center justify-content-between">
                                        <div class="bg-info icon mm-icon-box mr-0 rounded">
                                            <svg class="svg-icon fill-none" width="35" height="35" id="d-1-e"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="media-support-info ml-3">
                                        <h5>Excessive Clicking</h5>
                                        <p class="mb-0 font-size-14 text-primary">Media performance</p>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <h4 class="text-danger"><b>4342</b></h4>
                                    </div>
                                </li>
                                <li class="d-flex  align-items-center">
                                    <div class="top-block-one d-flex align-items-center justify-content-between">
                                        <div class="bg-success icon mm-icon-box mr-0 rounded">
                                            <svg class="svg-icon fill-none" width="35" height="35" id="d-1-m"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="media-support-info ml-3">
                                        <h5>Google Ads</h5>
                                        <p class="mb-0 font-size-14 text-primary">Premium performance</p>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <h4 class="text-danger"><b>32423</b></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">User's Progress</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg btn btn-outline-primary " id="dropdownMenuButton2"
                                data-toggle="dropdown">
                                Monthly<i class="ri-arrow-down-s-line ml-1"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="#">Daily</a>
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Yearly</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body align-items-center">
                    <div id="dash-chart-03"></div>
                    <div class="mt-1 p-0 list-inline text-center data-indicator d-flex justify-content-center">
                        <div class="">
                            <div class="d-flex align-items-center">
                                <i class="ri-checkbox-blank-circle-fill text-primary"></i>
                                <h2 class="line-height ml-2"><b>84</b></h2>
                            </div>
                            <p class="mb-0">Your Points</p>
                        </div>
                        <div class="ml-3">
                            <div class="d-flex align-items-center">
                                <i class="ri-checkbox-blank-circle-fill text-info"></i>
                                <h2 class="line-height ml-2"><b>64</b></h2>
                            </div>
                            <p class="mb-0">Average</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Upcoming Events</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <a href="#" class="btn btn-outline-primary view-more">View More</a>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-inline p-0 m-0">
                        <li class="d-flex align-items-center justify-content-between pb-3 border-bottom">
                            <div class="icon mm-icon-box event-icon bg-primary rounded-small font-size-18 mr-0">
                                <div class="date">23</div>
                                <div class="month">Oct</div>
                            </div>
                            <div class="event-info ml-3">
                                <h5>Samsing Mobile Flash Sale</h5>
                                <p class="mb-0 text-primary">08 : 30 Am</p>
                            </div>
                            <div class="d-flex align-items-center font-size-18">
                                <span class="mr-2"><i class="ri-edit-box-line"></i></span>
                                <span><i class="ri-delete-bin-line text-danger"></i></span>
                            </div>
                        </li>
                        <li class="d-flex align-items-center justify-content-between pb-3 pt-3 border-bottom">
                            <div class="icon mm-icon-box event-icon bg-info rounded-small font-size-18">
                                <div class="date">25</div>
                                <div class="month">Oct</div>
                            </div>
                            <div class="event-info ml-3">
                                <h5>Great Celebration Days</h5>
                                <p class="mb-0 text-primary">08 : 45 Am</p>
                            </div>
                            <div class="d-flex align-items-center font-size-18">
                                <span class="mr-2"><i class="ri-edit-box-line"></i></span>
                                <span><i class="ri-delete-bin-line text-danger"></i></span>
                            </div>
                        </li>
                        <li class="d-flex align-items-center justify-content-between pb-3 pt-3 border-bottom">
                            <div class="icon mm-icon-box event-icon bg-primary rounded-small font-size-18 mr-0">
                                <div class="date">23</div>
                                <div class="month">Oct</div>
                            </div>
                            <div class="event-info ml-3">
                                <h5>64GB Smart Phone Launch</h5>
                                <p class="mb-0 text-primary">08 : 30 Am</p>
                            </div>
                            <div class="d-flex align-items-center font-size-18">
                                <span class="mr-2"><i class="ri-edit-box-line"></i></span>
                                <span><i class="ri-delete-bin-line text-danger"></i></span>
                            </div>
                        </li>
                        <li class="d-flex align-items-center justify-content-between pt-3">
                            <div class="icon mm-icon-box event-icon bg-success rounded-small font-size-18">
                                <div class="date">28</div>
                                <div class="month">Oct</div>
                            </div>
                            <div class="event-info ml-3">
                                <h5>Personalize Gift Materials</h5>
                                <p class="mb-0 text-primary">09 : 00 Am</p>
                            </div>
                            <div class="d-flex align-items-center font-size-18">
                                <span class="mr-2"><i class="ri-edit-box-line"></i></span>
                                <span><i class="ri-delete-bin-line text-danger"></i></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Top Performers</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <a href="#" class="btn btn-outline-primary view-more">View More</a>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-inline p-0 m-0">
                        <li class="media align-items-start">
                            <a href="JavaScript:Void(0);"><img src="../assets/images/user/1.jpg"
                                    class="img-fluid avatar-60 rounded-small" alt="image"></a>
                            <div class="media-body ml-3">
                                <div class="d-flex justify-content-between">
                                    <h5>Julia Met</h5>
                                    <span class="text-danger font-size-14">23 Jun 2020</span>
                                </div>
                                <span class="text-primary">New York</span>
                            </div>
                        </li>
                        <li class="media align-items-start mt-3">
                            <a href="JavaScript:Void(0);"><img src="../assets/images/user/5.jpg"
                                    class="img-fluid avatar-60 rounded-small" alt="image"></a>
                            <div class="media-body ml-3">
                                <div class="d-flex justify-content-between">
                                    <h5>Carolina Tens</h5>
                                    <span class="text-danger font-size-14">18 Dec 2020</span>
                                </div>
                                <span class="text-primary">California</span>
                            </div>
                        </li>
                        <li class="media align-items-start mt-3">
                            <a href="JavaScript:Void(0);"><img src="../assets/images/user/4.jpg"
                                    class="img-fluid avatar-60 rounded-small" alt="image"></a>
                            <div class="media-body ml-3">
                                <div class="d-flex justify-content-between">
                                    <h5>Anna Mull</h5>
                                    <span class="text-danger font-size-14">23 Aug 2020</span>
                                </div>
                                <span class="text-primary">Indiana</span>
                            </div>
                        </li>
                        <li class="media align-items-start mt-3">
                            <a href="JavaScript:Void(0);"><img src="../assets/images/user/5.jpg"
                                    class="img-fluid avatar-60 rounded-small" alt="image"></a>
                            <div class="media-body ml-3">
                                <div class="d-flex justify-content-between">
                                    <h5>Joan Watson</h5>
                                    <span class="text-danger font-size-14">31 Dec 2020</span>
                                </div>
                                <span class="text-primary">Chicago</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Social Media</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <a href="#" class="btn btn-outline-primary view-more">View More</a>
                    </div>
                </div>
                <div class="card-body">
                    <div id="dash-chart-02"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Products</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <a href="#" class="btn btn-outline-primary view-more">View More</a>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-inline p-0 m-0">
                        <li class="media align-items-center">
                            <a href="JavaScript:Void(0);"><img src="../assets/images/layouts/layout-1/prod-1.jpg"
                                    class="img-fluid avatar-60 rounded-small" alt="image"></a>
                            <div class="media-body ml-3">
                                <h5>Full Tees</h5>
                                <p class="mb-0 text-primary">100 Items</p>
                            </div>
                            <p class="mb-0  text-danger"><b>$ 12.8</b></p>
                        </li>
                        <li class="media align-items-center mt-3">
                            <a href="JavaScript:Void(0);"><img src="../assets/images/layouts/layout-1/prod-2.jpg"
                                    class="img-fluid avatar-60 rounded-small" alt="image"></a>
                            <div class="media-body ml-3">
                                <h5>Denim Jeans</h5>
                                <p class="mb-0 text-primary">92 Items</p>
                            </div>
                            <p class="mb-0  text-danger"><b>$ 15.6</b></p>
                        </li>
                        <li class="media align-items-center mt-3">
                            <a href="JavaScript:Void(0);"><img src="../assets/images/layouts/layout-1/prod-3.jpg"
                                    class="img-fluid avatar-60 rounded-small" alt="image"></a>
                            <div class="media-body ml-3">
                                <h5>Hip Hop Hat</h5>
                                <p class="mb-0 text-primary">50 Items</p>
                            </div>
                            <p class="mb-0  text-danger"><b>$ 18.5</b></p>
                        </li>
                        <li class="media align-items-center mt-3">
                            <a href="JavaScript:Void(0);"><img src="../assets/images/layouts/layout-1/prod-4.jpg"
                                    class="img-fluid avatar-60 rounded-small" alt="image"></a>
                            <div class="media-body ml-3">
                                <h5>Sports Shoes</h5>
                                <p class="mb-0 text-primary">95 Items</p>
                            </div>
                            <p class="mb-0  text-danger"><b>$ 11.0</b></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page end  -->
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
	
