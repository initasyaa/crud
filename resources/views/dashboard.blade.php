@extends('layout.main')
@section('content')

<style>
  .cont2 {
        text-align: center;
        font-size: 32px;
        color: #333; 
        padding: 50px 0; 
  }
</style>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0"></h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
              </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="cont2">
  <p>Selamat Datang di Sistem Manajemen Belanja Bijak!</p>
  <p>Kemudahan dan kepraktisan dalam mengelola semua produk.</p>
</div>
</div>

@endsection