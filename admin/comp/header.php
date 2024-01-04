<?php require 'fungsi/fungsi.php'; ?>

<?php foreach (summon_admin() as $key): ?>
  

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $judul; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- logo -->
  <link rel="icon" type="image/png" href="<?= url()?>img/logo_kasir_kita.png">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= url() ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= url() ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= url() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= url() ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= url() ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= url() ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= url() ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= url() ?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- SEARCH FORM -->
    <form action="" method="POST" class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" name="cari" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" name="go" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
 
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="<?= url()?>img/logo_kasir_kita.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Web Kasir</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="<?= url() ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
          <?php 

          if ($key['foto']!= '') {
                        echo '<img src="img/'.$key['foto'].'" height="150">';
                      }else{
                        echo '<img src="img/user_logo.png" height="150">';
                      }

           ?>
        </div>
        <div class="info">
          <a href="index.php?m=admin&s=detail" class="d-block" ><?= $key['nama'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
   
        <div class="info">
          <a href="#" class="d-block">Menu</a>
        </div>
      </div>

          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Menu
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?m=admin&s=title" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu User</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="index.php?m=kategori&s=title" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Kategori Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?m=produk&s=title" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?m=rak&s=title" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Rak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?m=supplier&s=title" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?m=laporan&s=title" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Laporan Penjualan</p>
                </a>
              </li>

            </ul>
          </li>
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Logistik
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?m=produkmasuk&s=title" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produk Masuk</p>
                </a>
              </li>
             
            </ul>
          </li>

          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
   
        <div class="info">
          <span class="d-block text-gray">Logout</span>
        </div>
      </div>

      <a href="logout.php"><button class="btn btn-danger"><i class="fa fa-power-off" aria-hidden="true"></i></button></a>
         
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <?php endforeach; ?>