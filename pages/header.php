<?php

ob_start();
session_start();

include("../config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo title ?>
    </title>
    <link rel="icon" type="image/x-icon" class="js-site-favicon" href="<?php echo WEB_URL; ?>images/logo.png">


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/toastr/toastr.min.css">
    <!-- SweetAlert -->
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/datatables/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/datatable/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo WEB_URL; ?>plugins/datatable/css/buttons.dataTables.min.css">

</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed sidebar-mini-md sidebar-mini-xs text-sm"
    data-panel-auto-height-mode="height">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-dark bg-primary">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
               
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> 
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary bg-navy elevation-4 sidebar-no-expand">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link bg-primary text-sm">
                <img src="<?php echo WEB_URL; ?>images/logo.png" alt="<?php echo title; ?>"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">
                    <?php echo title; ?>
                </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo WEB_URL; ?>images/<?php echo $_SESSION['objLogin']['Photo']; ?>"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?php echo $_SESSION['objLogin']['Fullname']; ?>
                        </a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a title="Dashboard" id="dashboard" href="<?php echo WEB_URL; ?>pages/dashboard.php" class="dashboard nav-link <?php if ($page_name != '' && $page_name == 'dashboard' || $page_name == 'index') {
                                   echo 'active';
                               } ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a title="Dashboard" href="<?php echo WEB_URL; ?>pages/supplier.php" class="nav-link <?php if ($page_name != '' && $page_name == 'supplier') {
                                   echo 'active';
                               } ?>">
                                <i class="nav-icon fas fa-truck-loading"></i>
                                <p>
                                    Supplier
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a title="Item List" href="<?php echo WEB_URL; ?>pages/item.php" class="nav-link <?php if ($page_name != '' && $page_name == 'item list') {
                                   echo 'active';
                               } ?>">
                                <i class="nav-icon fas fa-boxes"></i>
                                <p>
                                    Item List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a title="Purchase Orders" href="<?php echo WEB_URL; ?>pages/purchaseorder.php" class="nav-link <?php if ($page_name != '' && $page_name == 'purchase orders') {
                                   echo 'active';
                               } ?>">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>
                                    Purchase Orders
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a title="Project List" href="<?php echo WEB_URL; ?>pages/project.php" class="nav-link <?php if ($page_name != '' && $page_name == 'project list') {
                                   echo 'active';
                               } ?>">
                                <i class="nav-icon fas fa-building"></i>
                                <p>
                                    Project List
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Maintenance</li>
                        <li class="nav-item">
                            <a title="Dashboard" href="<?php echo WEB_URL; ?>pages/user.php" class="nav-link <?php if ($page_name != '' && $page_name == 'user') {
                                   echo 'active';
                               } ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    User List
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a title="Dashboard" href="<?php echo WEB_URL; ?>pages/setting.php" class="nav-link <?php if ($page_name != '' && $page_name == 'setting') {
                                   echo 'active';
                               } ?>">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Settings
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>