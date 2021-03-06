
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SimpleD | Responsive Bootstrap 4 Admin Dashboard Template</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">
      <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="../assets/vendor/@icon/dripicons/dripicons.css">

      <link rel='stylesheet' href='../assets/vendor/fullcalendar/core/main.css' />
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/daygrid/main.css' />
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/timegrid/main.css' />
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/list/main.css' />
      <link rel="stylesheet" href="../assets/vendor/mapbox/mapbox-gl.css">  </head>
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
              <a href="{{ route('home5') }}" class="header-logo">
                  <img src="{{ asset('img/newlogo.png') }}" class="img-fluid rounded-normal light-logo" alt="logo">
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
                          <a href="{{ route('home5') }}" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i class="">
                                  <svg class="svg-icon" id="mm-dash" width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                      viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                  </svg>
                              </i>

                              <span class="ml-2">BERANDA</span>

                              <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                              <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="Dashboards" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                              <li class="active">
                                  <a href="../backend/index.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-dash-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                          </svg>
                                      </i>
                                      <span>Dashboard 1</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/dashboard-2.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-dash-2" width="20" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                          </svg>
                                      </i>
                                      <span>Dashboard 2</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/dashboard-3.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-dash-3" width="20" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                          </svg>
                                      </i>
                                      <span>Dashboard 3</span>
                                  </a>
                              </li>
                          </ul>
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
                              <span class="ml-2">Application</span>
                              <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                              <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="app" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                              <li class="">
                                  <a href="#user" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-user-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                          </svg>
                                      </i>
                                      <span class="">User Details</span>
                                      <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="user" class="submenu collapse" data-parent="#app">
                                      <li class="">
                                          <a href="../app/user-profile.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-user-1-1" xmlns="http://www.w3.org/2000/svg"
                                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                  </svg>
                                              </i><span class="">User Profile</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../app/user-add.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-user-1-2" xmlns="http://www.w3.org/2000/svg"
                                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                                  </svg>
                                              </i><span class="">User Add</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../app/user-list.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-user-1-3" xmlns="http://www.w3.org/2000/svg"
                                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                  </svg>
                                              </i><span class="">User List</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="../app/chat.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-chat-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                          </svg>
                                      </i><span class="">Chat</span>
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
                                      </i><span class="">Todo</span>
                                  </a>
                              </li>
                          </ul>
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
                              <span class="ml-2">UI Elements</span>
                              <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                              <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="ui" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                              <li class="">
                                  <a href="../backend/ui-avatars.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                      </i><span class="">Avatars</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-alerts.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                          </svg>
                                      </i><span class="">Alerts</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-badges.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                          </svg>
                                      </i><span class="">Badges</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-breadcrumb.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 6h16M4 12h16M4 18h16" />
                                          </svg>
                                      </i><span class="">Breadcrumb</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-buttons.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width={2}
                                                  d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                          </svg>
                                      </i><span class="">Buttons</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-buttons-group.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-5" width="20" heigth="20"
                                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                              stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                          </svg>
                                      </i><span class="">Buttons Group</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-boxshadow.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-6" width="20" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                          </svg>
                                      </i><span class="">Box Shadow</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-colors.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                          </svg>
                                      </i><span class="">Colors</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-cards.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                          </svg>
                                      </i><span class="">Cards</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-carousel.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                          </svg>
                                      </i><span class="">Carousel</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-grid.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-10" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                          </svg>
                                      </i><span class="">Grid</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-images.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-12" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                          </svg>
                                      </i><span class="">Images</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-list-group.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-13" xmlns="http://www.w3.org/2000/svg" width="20"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                              <line x1="8" y1="6" x2="21" y2="6"></line>
                                              <line x1="8" y1="12" x2="21" y2="12"></line>
                                              <line x1="8" y1="18" x2="21" y2="18"></line>
                                              <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                              <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                              <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                          </svg>
                                      </i><span class="">list Group</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-media-object.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-14" width="20" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                          </svg>
                                      </i><span class="">Media</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-modal.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-15" xmlns="http://www.w3.org/2000/svg" width="20"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns">
                                              <path
                                                  d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18">
                                              </path>
                                          </svg>
                                      </i><span class="">Modal</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-notifications.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-16" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                          </svg>
                                      </i><span class="">Notifications</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-pagination.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-17" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                          </svg>
                                      </i><span class="">Pagination</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-popovers.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-18" xmlns="http://www.w3.org/2000/svg" width="20"
                                              viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <line x1="7.5" y1="4.21" x2="7.5" y2="4.22" />
                                              <line x1="4.21" y1="7.5" x2="4.21" y2="7.51" />
                                              <line x1="3" y1="12" x2="3" y2="12.01" />
                                              <line x1="4.21" y1="16.5" x2="4.21" y2="16.51" />
                                              <line x1="7.5" y1="19.79" x2="7.5" y2="19.8" />
                                              <line x1="12" y1="21" x2="12" y2="21.01" />
                                              <line x1="16.5" y1="19.79" x2="16.5" y2="19.8" />
                                              <line x1="19.79" y1="16.5" x2="19.79" y2="16.51" />
                                              <line x1="21" y1="12" x2="21" y2="12.01" />
                                              <line x1="19.79" y1="7.5" x2="19.79" y2="7.51" />
                                              <line x1="16.5" y1="4.21" x2="16.5" y2="4.22" />
                                              <line x1="12" y1="3" x2="12" y2="3.01" />
                                          </svg>
                                      </i><span class="">Popovers</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-progressbars.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-19" xmlns="http://www.w3.org/2000/svg" width="20"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              class="feather feather-hard-drive">
                                              <line x1="22" y1="12" x2="2" y2="12"></line>
                                              <path
                                                  d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                              </path>
                                              <line x1="6" y1="16" x2="6.01" y2="16"></line>
                                              <line x1="10" y1="16" x2="10.01" y2="16"></line>
                                          </svg>
                                      </i><span class="">Progressbars</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-typography.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-20" width="20" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                          </svg>
                                      </i>
                                      <span class="">Typography</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-tabs.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-21" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                          </svg>
                                      </i>
                                      <span class="">Tabs</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-tooltips.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-22" xmlns="http://www.w3.org/2000/svg" width="20"
                                              viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <path
                                                  d="M4 13v-8a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v8a2 2 0 0 0 6 0v-8a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v8a8 8 0 0 1 -16 0" />
                                              <line x1="4" y1="8" x2="9" y2="8" />
                                              <line x1="15" y1="8" x2="19" y2="8" />
                                          </svg>
                                      </i>
                                      <span class="">Tooltips</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/ui-embed-video.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-ui-1-23" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                          </svg>
                                      </i>
                                      <span class="">Video</span>
                                  </a>
                              </li>
                          </ul>
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
                              <span class="ml-2">Forms</span>
                              <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                              <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="form" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                              <li class="">
                                  <a href="#form-controls" class="collapsed svg-icon" data-toggle="collapse"
                                      aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-form-1-1" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                          </svg>
                                      </i><span class="">Form Controls</span>
                                      <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="form-controls" class="submenu collapse" data-parent="#form">
                                      <li class="">
                                          <a href="../backend/form-layout.html">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-form-1-2" xmlns="http://www.w3.org/2000/svg"
                                                      width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                      class="feather feather-book">
                                                      <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                                      <path
                                                          d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z">
                                                      </path>
                                                  </svg>
                                              </i><span class="">Form Elements</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../backend/form-input-group.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-form-1-3" xmlns="http://www.w3.org/2000/svg"
                                                      width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                      <rect x="2" y="6" width="20" height="12" rx="2" />
                                                      <line x1="6" y1="10" x2="6" y2="10" />
                                                      <line x1="10" y1="10" x2="10" y2="10" />
                                                      <line x1="14" y1="10" x2="14" y2="10" />
                                                      <line x1="18" y1="10" x2="18" y2="10" />
                                                      <line x1="6" y1="14" x2="6" y2="14.01" />
                                                      <line x1="18" y1="14" x2="18" y2="14.01" />
                                                      <line x1="10" y1="14" x2="14" y2="14" />
                                                  </svg>
                                              </i><span class="">Form Input</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../backend/form-validation.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-form-1-4" xmlns="http://www.w3.org/2000/svg"
                                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                  </svg>
                                              </i><span class="">Form Validation</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../backend/form-switch.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-form-1-5" xmlns="http://www.w3.org/2000/svg"
                                                      width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                      class="feather feather-toggle-left">
                                                      <rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect>
                                                      <circle cx="8" cy="12" r="3"></circle>
                                                  </svg>
                                              </i><span class="">Form Switch</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../backend/form-chechbox.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-form-1-6" xmlns="http://www.w3.org/2000/svg"
                                                      width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                      class="feather feather-check-square">
                                                      <polyline points="9 11 12 14 22 4"></polyline>
                                                      <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                      </path>
                                                  </svg>
                                              </i><span class="">Form Checkbox</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../backend/form-radio.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-form-1-7" xmlns="http://www.w3.org/2000/svg"
                                                      width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                      <circle cx="12" cy="12" r="9" />
                                                      <path d="M12 3a4.5 4.5 0 0 0 0 9a4.5 4.5 0 0 1 0 9" />
                                                      <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
                                                      <circle cx="12" cy="16.5" r=".5" fill="currentColor" />
                                                  </svg>
                                              </i><span class="">Form Radio</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../backend/form-textarea.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-form-1-8" xmlns="http://www.w3.org/2000/svg"
                                                      width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                      class="feather feather-type">
                                                      <polyline points="4 7 4 4 20 4 20 7"></polyline>
                                                      <line x1="9" y1="20" x2="15" y2="20"></line>
                                                      <line x1="12" y1="4" x2="12" y2="20"></line>
                                                  </svg>
                                              </i><span class="">Form Textarea</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#form-widget" class="collapsed svg-icon" data-toggle="collapse"
                                      aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-form-2" xmlns="http://www.w3.org/2000/svg" width="20"
                                              viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <rect x="5" y="3" width="14" height="18" rx="2" />
                                              <line x1="9" y1="7" x2="15" y2="7" />
                                              <line x1="9" y1="11" x2="15" y2="11" />
                                              <line x1="9" y1="15" x2="13" y2="15" />
                                          </svg>
                                      </i><span class="">Form Widget</span>
                                      <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="form-widget" class="submenu collapse" data-parent="#form">
                                      <li class="">
                                          <a href="../backend/form-datepicker.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-form-2-1" xmlns="http://www.w3.org/2000/svg"
                                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                  </svg>
                                              </i><span class="">Datepicker</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../backend/form-select.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-form-2-2" xmlns="http://www.w3.org/2000/svg"
                                                      width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                      <rect x="4" y="4" width="16" height="16" rx="2" />
                                                      <path d="M9 11l3 3l3 -3" />
                                                  </svg>
                                              </i><span class="">Select2</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../backend/form-file-uploader.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-form-2-3" xmlns="http://www.w3.org/2000/svg"
                                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                  </svg>
                                              </i><span class="">File Upload</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../backend/form-quill.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-form-2-4" xmlns="http://www.w3.org/2000/svg"
                                                      width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                      class="feather feather-type">
                                                      <polyline points="4 7 4 4 20 4 20 7"></polyline>
                                                      <line x1="9" y1="20" x2="15" y2="20"></line>
                                                      <line x1="12" y1="4" x2="12" y2="20"></line>
                                                  </svg>
                                              </i><span class="">Form quill</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="">
                          <a href="#table" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg class="svg-icon" id="mm-table-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                  </svg>
                              </i>
                              <span class="ml-2">Table</span>
                              <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                              <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="table" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                              <li class="">
                                  <a href="../backend/tables-basic.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-table-1-1" xmlns="http://www.w3.org/2000/svg"
                                              width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <rect x="4" y="4" width="16" height="16" rx="2" />
                                              <line x1="4" y1="10" x2="20" y2="10" />
                                              <line x1="10" y1="4" x2="10" y2="20" />
                                          </svg>
                                      </i><span class="">Basic Tables</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/table-data.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-table-1-2" xmlns="http://www.w3.org/2000/svg"
                                              width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <rect x="4" y="4" width="16" height="16" rx="2" />
                                              <line x1="4" y1="10" x2="20" y2="10" />
                                              <line x1="10" y1="4" x2="10" y2="20" />
                                          </svg>
                                      </i><span class="">Data Table</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/table-editable.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-table-1-3" xmlns="http://www.w3.org/2000/svg"
                                              width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <line x1="4" y1="6" x2="9.5" y2="6" />
                                              <line x1="4" y1="10" x2="9.5" y2="10" />
                                              <line x1="4" y1="14" x2="9.5" y2="14" />
                                              <line x1="4" y1="18" x2="9.5" y2="18" />
                                              <line x1="14.5" y1="6" x2="20" y2="6" />
                                              <line x1="14.5" y1="10" x2="20" y2="10" />
                                              <line x1="14.5" y1="14" x2="20" y2="14" />
                                              <line x1="14.5" y1="18" x2="20" y2="18" />
                                          </svg>
                                      </i><span class="">Editable Table</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/table-tree.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-table-1-4" xmlns="http://www.w3.org/2000/svg"
                                              width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <path d="M12 3l4 4l-2 1l4 4l-3 1l4 4h-14l4 -4l-3 -1l4 -4l-2 -1z" />
                                              <path d="M14 17v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-3" />
                                          </svg>
                                      </i><span class="">Table Tree</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="">
                          <a href="#icon" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg class="svg-icon" id="mm-icon-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                  </svg>
                              </i>
                              <span class="ml-2">Icons</span>
                              <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                              <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="icon" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                              <li class="">
                                  <a href="../backend/icon-dripicons.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-icon-1-1" xmlns="http://www.w3.org/2000/svg" width="20"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                              <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                              <polyline points="2 17 12 22 22 17"></polyline>
                                              <polyline points="2 12 12 17 22 12"></polyline>
                                          </svg>
                                      </i><span class="">Dripicons</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/icon-fontawesome.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-icon-1-2" xmlns="http://www.w3.org/2000/svg" width="20"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                              </path>
                                          </svg>
                                      </i><span class="">Font Awesome</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/icon-lineawesome.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-icon-1-3" xmlns="http://www.w3.org/2000/svg" width="20"
                                              viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <circle cx="9" cy="5" r="1" />
                                              <circle cx="9" cy="12" r="1" />
                                              <circle cx="9" cy="19" r="1" />
                                              <circle cx="15" cy="5" r="1" />
                                              <circle cx="15" cy="12" r="1" />
                                              <circle cx="15" cy="19" r="1" />
                                          </svg>
                                      </i><span class="">Line Awesome</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/icon-remixicon.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-icon-1-4" xmlns="http://www.w3.org/2000/svg" width="20"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                              <circle cx="12" cy="12" r="10"></circle>
                                          </svg>
                                      </i><span class="">Remixicon</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="">
                          <a href="#auth" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg class="svg-icon" id="mm-icon-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                  </svg>
                              </i>
                              <span class="ml-2">Authentication</span>
                              <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                              <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="auth" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                              <li class="">
                                  <a href="../backend/auth-sign-in.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-auth-1-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                          </svg>
                                      </i>
                                      <span class="">Login</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/auth-sign-up.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-auth-1-2" width="20" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                          </svg>
                                      </i>
                                      <span class="">Register</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/auth-recoverpw.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-auth-1-3" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                          </svg>
                                      </i>
                                      <span class="">Recover Password</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/auth-confirm-mail.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-auth-1-4" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                          </svg>
                                      </i>
                                      <span class="">Confirm Mail</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/auth-lock-screen.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-auth-1-5" xmlns="http://www.w3.org/2000/svg" width="20"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                              <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                          </svg>
                                      </i>
                                      <span class="">Lock Screen</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="">
                          <a href="#charts" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg class="svg-icon" id="mm-chart-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                  </svg>
                              </i>
                              <span class="ml-2">Charts</span>
                              <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                              <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="charts" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                              <li class="">
                                  <a href="../backend/chart-apex.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-chart-1-1" width="20"
                                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                              stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                          </svg>
                                      </i>
                                      <span class="">Apex Chart</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/chart-high.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-chart-1-2" width="20"
                                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                              stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                          </svg>
                                      </i>
                                      <span class="">High Chart</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/chart-morries.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-chart-1-3" width="20"
                                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                              stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                          </svg>
                                      </i>
                                      <span class="">Morries Charts</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="">
                          <a href="#pages" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg class="svg-icon" id="mm-extra-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                  </svg>
                              </i>
                              <span class="ml-2">Extra Pages</span>
                              <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                              <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="pages" class="submenu collapse" data-parent="#mm-sidebar-toggle">
                              <li class="">
                                  <a href="#timeline" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-extra-1-2" xmlns="http://www.w3.org/2000/svg"
                                              width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <line x1="12" y1="12" x2="12" y2="12.01" />
                                              <path
                                                  d="M12 2a4 10 0 0 0 -4 10a4 10 0 0 0 4 10a4 10 0 0 0 4 -10a4 10 0 0 0 -4 -10"
                                                  transform="rotate(45 12 12)" />
                                              <path
                                                  d="M12 2a4 10 0 0 0 -4 10a4 10 0 0 0 4 10a4 10 0 0 0 4 -10a4 10 0 0 0 -4 -10"
                                                  transform="rotate(-45 12 12)" />
                                          </svg>
                                      </i><span class="">Timeline</span>
                                      <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="timeline" class="submenu collapse" data-parent="#pages">
                                      <li class="">
                                          <a href="../backend/timeline-1.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-extra-1-2-1" xmlns="http://www.w3.org/2000/svg"
                                                      width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                      <circle cx="12" cy="12" r="9" />
                                                  </svg>
                                              </i><span class="">Timeline 1</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../backend/timeline-2.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-extra-1-2-2" xmlns="http://www.w3.org/2000/svg"
                                                      width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                      class="feather feather-disc">
                                                      <circle cx="12" cy="12" r="10"></circle>
                                                      <circle cx="12" cy="12" r="3"></circle>
                                                  </svg>
                                              </i><span class="">Timeline 2</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#pages-error" class="collapsed svg-icon" data-toggle="collapse"
                                      aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-extra-1-4" xmlns="http://www.w3.org/2000/svg"
                                              width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="feather feather-alert-triangle">
                                              <path
                                                  d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                              </path>
                                              <line x1="12" y1="9" x2="12" y2="13"></line>
                                              <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                          </svg>
                                      </i><span class="">Error</span>
                                      <i class="las la-angle-right mm-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down mm-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="pages-error" class="submenu collapse" data-parent="#pages">
                                      <li class="">
                                          <a href="../backend/pages-error.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-extra-1-4-1" xmlns="http://www.w3.org/2000/svg"
                                                      width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                      class="feather feather-alert-circle">
                                                      <circle cx="12" cy="12" r="10"></circle>
                                                      <line x1="12" y1="8" x2="12" y2="12"></line>
                                                      <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                                  </svg>
                                              </i><span class="">Error 404</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="../backend/pages-error-500.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="mm-extra-1-4-2" xmlns="http://www.w3.org/2000/svg"
                                                      width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                      <path d="M9 9v-1a3 3 0 0 1 6 0v1" />
                                                      <path d="M8 9h8a6 6 0 0 1 1 3v3a5 5 0 0 1 -10 0v-3a6 6 0 0 1 1 -3" />
                                                      <line x1="3" y1="13" x2="7" y2="13" />
                                                      <line x1="17" y1="13" x2="21" y2="13" />
                                                      <line x1="12" y1="20" x2="12" y2="14" />
                                                      <line x1="4" y1="19" x2="7.35" y2="17" />
                                                      <line x1="20" y1="19" x2="16.65" y2="17" />
                                                      <line x1="4" y1="7" x2="7.75" y2="9.4" />
                                                      <line x1="20" y1="7" x2="16.25" y2="9.4" />
                                                  </svg>
                                              </i><span class="">Error 500</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="../backend/pricing.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-extra-1-3-1" xmlns="http://www.w3.org/2000/svg"
                                              width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <rect x="4" y="4" width="16" height="16" rx="2" />
                                          </svg>
                                      </i><span class="">Pricing</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/pages-invoice.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-extra-1-5" xmlns="http://www.w3.org/2000/svg"
                                              width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                              <path
                                                  d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                              <line x1="9" y1="9" x2="10" y2="9" />
                                              <line x1="9" y1="13" x2="15" y2="13" />
                                              <line x1="9" y1="17" x2="15" y2="17" />
                                          </svg>
                                      </i><span class="">Invoice</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/pages-faq.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-extra-1-7" xmlns="http://www.w3.org/2000/svg"
                                              width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <circle cx="12" cy="12" r="9" />
                                              <path d="M8 16l1.106 -1.99m1.4 -2.522l2.494 -4.488" />
                                              <path d="M7 14h5m2.9 0h2.1" />
                                              <path d="M16 16l-2.51 -4.518m-1.487 -2.677l-1.003 -1.805" />
                                          </svg>
                                      </i><span class="">Faq</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/pages-blank-page.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-extra-1-8" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                          </svg>
                                      </i><span class="">Blank Page</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/pages-maintenance.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-extra-1-9" xmlns="http://www.w3.org/2000/svg"
                                              width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                              stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                              <circle cx="12" cy="7" r="3" />
                                              <circle cx="17" cy="16" r="3" />
                                              <circle cx="7" cy="16" r="3" />
                                          </svg>
                                      </i><span class="">Maintenance</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/pages-comingsoon.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="mm-extra-1-10" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                          </svg>
                                      </i><span class="">Coming Soon</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </nav>
              <div id="sidebar-bottom" class="position-relative sidebar-bottom">
                  <div class="card bg-primary rounded">
                      <div class="card-body">
                          <div class="sidebarbottom-content">
                              <div class="image">
                                  <img src="../assets/images/layouts/layout-1/side-bkg.png" class="img-fluid"
                                      alt="side-bkg" />
                              </div>
                              <h5 class="mb-3 text-white mt-3">Did you Know ?</h5>
                              <p class="mb-0 text-white">You can add additional user in your Account's Settings</p>
                              <button type="button" class="btn btn-dark mt-3">
                                  New Program
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
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
                        <script>document.write(new Date().getFullYear())</script>?? <a href="#" class="">SimpleD</a>
                        All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </footer>    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>

    <!-- Flextree Javascript-->
    <script src="../assets/js/flex-tree.min.js"></script>
    <script src="../assets/js/tree.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>

    <!-- Masonary Gallery Javascript -->
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- Mapbox Javascript -->
    <script src="../assets/js/mapbox-gl.js"></script>
    <script src="../assets/js/mapbox.js"></script>

    <!-- Fullcalender Javascript -->
    <script src='../assets/vendor/fullcalendar/core/main.js'></script>
    <script src='../assets/vendor/fullcalendar/daygrid/main.js'></script>
    <script src='../assets/vendor/fullcalendar/timegrid/main.js'></script>
    <script src='../assets/vendor/fullcalendar/list/main.js'></script>

    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="../assets/js/vector-map-custom.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/chart-custom.js"></script>
    <script src="../assets/js/charts/01.js"></script>
    <script src="../assets/js/charts/02.js"></script>

    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>

    <!-- Emoji picker -->
    <script src="../assets/vendor/emoji-picker-element/index.js" type="module"></script>

    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>  </body>
</html>
