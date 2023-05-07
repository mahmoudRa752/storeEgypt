<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{asset('admin/css/mdb.min.css')}}">
  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn white-skin">

  <!-- Main Navigation -->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
            <a href="#" class="pl-0"><img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"></a>
          </div>
        </li>

        <!-- Search Form -->
        <li>
          <form class="search-form" role="search">
            <div class="md-form mt-0 waves-light">
              <input type="text" class="form-control py-2" placeholder="Search">
            </div>
          </form>
        </li>

      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg double-nav">

      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse mr-3"><i class="fas fa-bars"></i></a>
      </div>

      <!-- Breadcrumb -->
      <div class="breadcrumb-dn mr-auto">
        <a href="{{route('admin.index')}}"><h2>Dashboard</h2></a>
      </div>

      <div class="d-flex change-mode">

        <div class="ml-auto mb-0 mr-3 change-mode-wrapper">
          <button class="btn btn-outline-black btn-sm" id="dark-mode">Change Mode</button>
        </div>

        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

          <!-- Dropdown -->
          <li class="nav-item">
              <a href="{{route('admin.cats')}}" class="font-weight-bold mr-4 sm-inline-block">Categories</a>

          </li>
          <li class="nav-item">
              <a href="{{route('admin.clients')}}" class="font-weight-bold mr-4 sm-inline-block">Clients</a>

          </li>
          <li class="nav-item">
              <a href="{{route('admin.products')}}" class="font-weight-bold mr-4 sm-inline-block">Products</a>

          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span
                class="clearfix d-none d-sm-inline-block">Contact</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span
                class="clearfix d-none d-sm-inline-block">Support</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{ route('admin.logout')}}">Log Out</a>
              <a class="dropdown-item" href="#">My account</a>
            </div>
          </li>

        </ul>
        <!-- Navbar links -->

      </div>

    </nav>
    <!-- Navbar -->


  </header>
  <!-- Main Navigation -->


