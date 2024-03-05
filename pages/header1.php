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
        <?php echo title; ?>
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