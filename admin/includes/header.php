<?php

$url = urlOf('pages/login/login.php');
if (!isset($_SESSION['LoggedIn'])) {
    header("Location: $url");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from polygons.space/neo/theme/templates/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 11:07:07 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <title>Neo - Responsive Admin Dashboard Template</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?= urlOf('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= urlOf('assets/plugins/font-awesome/css/all.min.css') ?>" rel="stylesheet">
        <link href="<?= urlOf('assets/plugins/perfectscroll/perfect-scrollbar.css') ?>" rel="stylesheet">
        <link href="<?= urlOf('assets/plugins/pace/pace.css') ?>" rel="stylesheet">
        <link href="<?= urlOf('assets/plugins/apexcharts/apexcharts.css') ?>" rel="stylesheet">      
        <link href="<?= urlOf('assets/css/main.min.css') ?>" rel="stylesheet">
        <link href="<?= urlOf('assets/css/custom.css') ?>" rel="stylesheet">
        <link href="<?= urlOf('assets/plugins/DataTables/datatables.min.css') ?>" rel="stylesheet">   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>`