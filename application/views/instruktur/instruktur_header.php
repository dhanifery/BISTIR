<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- HEAD START -->
     <head>
          <meta charset="utf-8">
          <title>B I S T I R</title>
          <!-- MATERIAL CDN -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"rel="stylesheet">
          <!-- CSS -->
          <link rel="stylesheet" href="<?= base_url('assets/css/admin/style.css') ?>">
     </head>
<!-- HEAD END -->
     <body>
          <div class="container">
               <!-- aside start -->
               <aside>
                    <div class="top">
                         <div class="logo">
                              <img src="<?= base_url('assets/images/logo.png') ?>">
                              <h2>BI<span class="danger">-STIR</span></h2>
                         </div>
                         <div class="close" id="close-btn">
                              <span class="material-icons-sharp">close</span>
                         </div>
                    </div>
                    <div class="sidebar">
                         <p>Home</p>
                         <a href="#" class="active"><span class="material-icons-sharp">grid_view</span>
                              <h3>Dashboard</h3>
                         </a>
                         <p>Master Data</p>
                         <a href="#"><span class="material-icons-sharp">person_outline</span>
                              <h3>Data Peserta</h3>
                         </a>
                         <a href="#"><span class="material-icons-sharp">group</span>
                              <h3>Data Instruktur</h3>
                         </a>
                         <a href="#"><span class="material-icons-sharp">person_outline</span>
                              <h3>Data Admin</h3>
                         </a>
                         <a href="#"><span class="material-icons-sharp">category</span>
                              <h3>Data Paket</h3>
                              <span class="message-count">20</span>
                         </a>
                         <p>Data Transaksi</p>
                         <a href="#"><span class="material-icons-sharp">insights</span>
                              <h3>Data Transaksi</h3>
                         </a>
                         <a href="#"><span class="material-icons-sharp">receipt_long</span>
                              <h3>Laporan Transaksi</h3>
                         </a>
                         <p>User</p>
                         <a href="#"><span class="material-icons-sharp">groups</span>
                              <h3>Data User</h3>
                         </a>
                         <a href="<?= base_url('Auth/logout');?>"><span class="material-icons-sharp">logout</span>
                              <h3>Logout</h3>
                         </a>
                    </div>
               </aside>
               <!-- aside end -->
               <!-- MAIN START -->

                         <main>
                              <h1>Dashboard</h1>
