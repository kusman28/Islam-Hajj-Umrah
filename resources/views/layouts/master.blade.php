
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
  <style>
    .navbar { background-color: #52de97 !important }
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
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
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
            {{ Auth::user()->name }} <br>
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
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/patients" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Patients
              </p>
            </router-link>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/brace" class="nav-link">
                  <i class="fas fa-teeth nav-icon yellow"></i>
                  <p>Braces</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/extraction" class="nav-link">
                  <i class="fas fa-tooth nav-icon blue"></i>
                  <p>Extractions</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/denture" class="nav-link">
                  <i class="fas fa-teeth-open nav-icon green"></i>
                  <p>Dentures</p>
                </router-link>
              </li>
            </ul>
            <li class="nav-item">
              <router-link to="/prescription" class="nav-link">
                <i class="nav-icon fas fa-file-prescription"></i>
                <p>
                  Treatment
                </p>
              </router-link>
            </li>
            {{-- <li class="nav-item">
              <router-link to="/payment" class="nav-link">
                <i class="nav-icon fas fa-money-bill-alt"></i>
                <p>
                  Medical History
                </p>
              </router-link>
            </li> --}}
            <li class="nav-item">
              <router-link to="/report" class="nav-link">
                <i class="nav-icon fas fa-print"></i>
                <p>
                  Records
                </p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="users" class="nav-link">
                <i class="nav-icon fas fa-user-nurse"></i>
                <p>
                  Users
                </p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/profile" class="nav-link">
                <i class="nav-icon fas fa-user-md"></i>
                <p>
                  Profile
                </p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/activities" class="nav-link">
                <i class="nav-icon fas fa-stream"></i>
                <p>
                  Activity Log
                </p>
              </router-link>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-power-off red"></i>
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
