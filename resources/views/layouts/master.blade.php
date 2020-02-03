
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Islam Hajj & Umrah | Dashboard</title>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <link href="template/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <style>
    .navbar { background-color: #2c786c !important }
    .main-sidebar { background-color: #004445 !important }
    * {
        font-family: 'Source Sans Pro';
    }  
    body::-webkit-scrollbar {
    width: 0.4em;
    }

    body::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    body::-webkit-scrollbar-thumb {
    background-color: #52de97;
    outline: 1px solid slategrey;
    }
    
    .sidebar::-webkit-scrollbar {
    width: 0.3em;
    }

    .sidebar::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    .sidebar::-webkit-scrollbar-thumb {
    background-color: #52de97;
    
    outline: 1px solid slategrey;
    }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="nav-icon ion-ios-settings-strong"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> 
    -->
    </ul>

    <!-- SEARCH -->
      <!-- <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" @keyup="searchit" type="search" v-model="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" @click="searchit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div> -->
{{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">

        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">Notifications
                <i class="ion-android-notifications"></i> 
                {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> 4 new messages
                  <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-users mr-2"></i> 8 friend requests
                  <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-file mr-2"></i> 3 new reports
                  <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
              </div>
            </li>
          </ul>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="template/img/logo3.png" alt="AdminLTE Logo" class="brand-image"
           style="opacity: .8">
           <span style="font-size: 18px;" class="brand-text font-weight-light">ISLAM HAJJ & UMRAH
           </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" style="margin-top: 10px;">
          
            <img src="template/img/user.png" class="img-circle elevation-1" alt="User Image">&nbsp;
        </div>
        <div class="info">
          <a href="#" class="d-block mt-2">
              <span class="badge badge-success">
            {{ Auth::user()->name }} <br>
              </span>
            {{-- <span class="badge badge-success">Admin</span> --}}
        </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
            <i class="nav-icon ion-ios-speedometer"></i>
              <p>
                Dashboard
              </p>
            </router-link>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon nav-icon ion-ios-more"></i>
              <p>
                Pending
                <i class="right fas ion-ios-arrow-back mt-1"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/pendingHajj" class="nav-link">
                  <i class="nav-icon ion-ios-people"></i>
                  <p>Hajj Registrants</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/pendingUmrah" class="nav-link">
                  <i class="nav-icon ion-ios-people"></i>
                  <p>Umrah Registrants</p>
                </router-link>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <router-link to="/registered" class="nav-link">
              <i class="nav-icon ion-ios-checkmark"></i>
              <p>
                Registered
              </p>
            </router-link>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon ion-ios-settings-strong"></i>
              <p>
                Management
                <i class="right fas ion-ios-arrow-back mt-1"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/hajjDocuments" class="nav-link">
                  <i class="nav-icon ion-ios-copy-outline"></i>
                  <p>Hajj Documents</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/umrahDocuments" class="nav-link">
                  <i class="nav-icon ion-ios-copy-outline"></i>
                  <p>Umrah Documents</p>
                </router-link>
              </li>
            </ul>
          </li>
            <li class="nav-item">
              <router-link to="/history" class="nav-link">
                <i class="nav-icon ion-ios-information"></i>
                <p>
                  History
                </p>
              </router-link>
              <hr>
            </li>
            <li class="nav-item">
              <router-link to="/settings" class="nav-link">
                <i class="nav-icon ion-ios-toggle"></i>
                <p>
                  Settings
                </p>
              </router-link>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="nav-icon ion-log-out"></i>
              <p>{{ __('Logout') }}</p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
            </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <router-view></router-view>
        <vue-progress-bar></vue-progress-bar>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  {{-- <footer class="main-footer">
    <!-- To the right -->
<div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Dental ClinicK Management System &copy; 2019 <a href="https://www.facebook.com/Pinaka.Mahabang.UserName.Sa.Peysbuk">K. Usman</a>.</strong> All rights reserved.
  </footer> --}}
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="/js/app.js"></script>
</body>
</html>
