<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Code by: www.codeinfoweb.com -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Sidebar | By Code Info</title>
    <link rel="stylesheet" href="style.css" />

    <!-- Box icons cdn link -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <aside class="sidebar" id="sidebar">
      <!-- logo -->
      <div class="logo">
        <i class="bx bx-cube-alt"></i>
      </div>

      <!-- menu links -->
      <nav class="menu">

        <div class="menu-item nav-active" data-tooltip="Home">
          <i class="bx bx-home-smile"></i>
          <span>Beranda</span>
        </div>
        <div class="menu-item" data-tooltip="Stats">
          <i class="bx bx-bar-chart-alt-2"></i>
          <span>Daftar Produk</span>
        </div>
        <div class="menu-item" data-tooltip="Chat">
          <i class="bx bx-message-square-dots"></i>
          <span>Transaksi</span>
        </div>
        <div class="menu-item" data-tooltip="Bookmarks">
          <i class="bx bx-bookmarks"></i>
          <span>Laporan</span>
        </div>


      <!-- logout -->
      <div class="logout" data-tooltip="Logout">
        <i class="bx bx-log-out"></i>
        <span>Logout</span>
      </div>

      <!-- toggle menu -->
      <div class="toggle-menu" id="toggle-button">
        <i class="bx bxs-right-arrow"></i>
        <i class="bx bxs-left-arrow"></i>
      </div>
    </aside>

    <script src="main.js"></script>
  </body>
</html>