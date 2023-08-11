<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Educate | Cotización</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template">
    <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="Codedthemes">
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicon.ico">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fontawesome.css" >
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/ionicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/linearicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/shreerang-material.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/uikit.css">


    <!-- Libs -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/perfect-scrollbar/perfect-scrollbar.css">

    <?php
    for ($i = 0; $i < count($links); $i++) {
        echo $links[$i];
    }
    ?>



</head>