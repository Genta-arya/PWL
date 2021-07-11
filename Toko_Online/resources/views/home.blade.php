@extends('main')

@section('title','Dashboard-') 
@section('wrapper')
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('about')}}" class="nav-link">About me</a>
      </li>
    </ul>
  </nav>   
@endsection
@section('container')
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{asset('#')}}" class="brand-link">
    <img src="{{asset('assets/dist/img/udinus.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">DashBoard</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('assets/dist/img/avatar4.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    {{-- <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          {{-- <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i> --}}
            <p>
              {{-- Dashboard --}}
            </p>
          </a>
        
        </li>
        <li class="nav-item">
          <a href="{{url('edit')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Edit Barang
            </p>
          </a>
          <ul class="nav nav-treeview">
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{url('/barang')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Data Barang
            </p>
          </a>
          <ul class="nav nav-treeview">
            
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{url('/input')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Input Barang
            </p>
          </a>
          <ul class="nav nav-treeview">
            
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{url('/pesanan')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Pesanan
            </p>
          </a>
          <ul class="nav nav-treeview">
            
          </ul>
        </li>
        
        <li class="nav-item">
          <a href="{{url('/')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Logout
              
            </p>
          </a>
        </li>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><Br>
      </ul>
    </nav>
</aside>

<!-- /.content-wrapper -->


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>

<!-- Content Wrapper. Contains page content -->
    
@endsection
@section('content-wrapper')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid" style="padding-left: 250px;">
      <div class="row mb-2">
        <div class="col-sm-6 ">
          <h1 class="m-0 font-bold">Selamat Datang Di Dashboard<br>Aplikasi Crud berbasis laravel<br> ________________________</h1><br><br>
          <img src="{{asset('assets/dist/img/udinus.png')}}" style="width: 300px; padding-left:50px;">
          <br><br>
          <h1 class="m-0"><br>M.Gentha arya pratama<br>A11.2019.11861<br>Tugas Akhir<br>Pemograman Berbasis Web</h1>
          
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
</div>
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">

  </div>
  <strong><br>Copyright &copy; 2014-2021  @genta</a>.</strong> All rights reserved.
</footer>
    <!-- /.content-header -->  
@endsection