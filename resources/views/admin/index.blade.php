<!-- @extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Selamat Datang Admin</h2>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
@endsection -->

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

  <title>POSq</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/lte/plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- Navbar -->
<!-- @include('admin/header') -->
<!-- navbar -->

<!-- Main Sidebar Container -->
@include('admin/sidebar')
<!-- Content Wrapper. Contains page content -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark">Kategori</h5>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Keranjang</h5>

      <!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
    <style>
        /* Gaya CSS di sini */
        body {
            font-family: Arial, sans-serif;
        }
        .item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .quantity {
            width: 20px;
            text-align: center;
        }
        .price {
            text-align: right;
        }
    </style>
</head>
<body>
<div class="mb-4">
     <div class="flex justify-between items-center mb-2">
      <span>
       Rujak Cingur
      </span>
      <span>
       Rp 12.000
      </span>
     </div>
     <div class="flex justify-between items-center mb-2">
      <span>
       Rendang
      </span>
      <span>
       Rp 48.000
      </span>
     </div>
     <div class="flex justify-between items-center mb-2">
      <span>
       Ayam Betutu
      </span>
      <span>
       Rp 35.000
      </span>
     </div>
    </div>
    <div>
        <label for="notes">Catatan:</label>
        <textarea id="notes" rows="4" cols="25"></textarea>
    </div>
    <p><strong>Item:</strong> 3 items</p>
    <p><strong>Subtotal:</strong> Rp 48.000</p>
    <p><strong>Diskon:</strong> 50%</p>
    <p><strong>Pajak 10%:</strong> Rp 0</p>
    <p><strong>TOTAL:</strong> Rp 24.000</p>
    <button class="mb-2"><i class="fa fa-plus" aria-hidden="true"></i> Tambahkan Diskon</button>
    <button>Proses Transaksi</button>
    <script>
        // JavaScript untuk menghitung total, mengelola diskon, dll.
    </script>
</body>
</html>
    </div>
  </aside>
  <!-- /.control-sidebar -->

<!-- Main Footer -->
@include('admin/footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/lte/dist/js/adminlte.min.js') }}"></script>



</body>
</html>