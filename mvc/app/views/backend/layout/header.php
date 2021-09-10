<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | <?= $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= ASSETS;?>/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= ASSETS;?>/backend/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= ASSETS;?>/backend/plugins/summernote/summernote-bs4.min.css">
<!-- jQuery -->
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
  
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../ind x3.html" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['user']['name']?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href= <?= ASSETS."/"."category/index" ?> class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Categorys
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href= <?= ASSETS."/"."post/index" ?> class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Posts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href= <?= ASSETS."/"."site_setting/setting" ?> class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Setting
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href= <?= ASSETS."/"."site_setting/theme" ?> class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Thems
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href= <?= ASSETS."/"."user/logout" ?> class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

   

 