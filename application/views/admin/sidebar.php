<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>FMI | B4+ admin template</title>

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
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/ionicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/linearicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/shreerang-material.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/uikit.css">
    <link rel="stylesheet" href="assets\libs\bootstrap-multiselect\bootstrap-multiselect.css">
    <link rel="stylesheet" href="assets\libs\bootstrap-select\bootstrap-select.css">

    <!-- Libs -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets\libs\select2\select2.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.css">
    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url() ?>assets\css\pages\account.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets\libs\growl\growl.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets\libs\toastr\toastr.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets\css\pages\messages.css">

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
                <!-- Brand demo (see assets/css/demo/demo.css) -->
                <div class="app-brand demo">
                    <span class="app-brand-logo demo">
                        <img src="<?= base_url() ?>assets/img/logo.png" alt="Brand Logo" class="img-fluid">
                    </span>
                    <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">FMI</a>
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                <div class="sidenav-divider mt-0"></div>
                <!-- Links -->
                <ul class="sidenav-inner py-1">

                    <!-- Dashboards -->
                    <li class="sidenav-item">
                        <a href="<?= base_url() ?>" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Dashboards</div>
                        </a>
                    </li>
                    <?php
                    if ($this->session->userdata('rol') == "1") {


                    ?>
                        <li class="sidenav-item">
                            <a href="<?= base_url() ?>blog" class="sidenav-link">
                                <i class="sidenav-icon feather icon-bold"></i>
                                <div>Blogs</div>
                            </a>
                        </li>
                        <li class="sidenav-item">
                            <a href="<?= base_url() ?>comentarios" class="sidenav-link ">
                                <i class="sidenav-icon feather icon-inbox"></i>
                                <div>Comentarios</div>
                            </a>
                        </li>
                        <li class="sidenav-item">
                            <a href="<?= base_url() ?>usuario" class="sidenav-link">
                                <i class="sidenav-icon feather icon-user"></i>
                                <div>Usuarios</div>
                            </a>
                        </li>
                        <li class="sidenav-item">
                            <a href="" class="sidenav-link sidenav-toggle">
                                <i class="sidenav-icon iion ion-md-mail-unread"></i>
                                <div>Email</div>
                                <div class="pl-1 ml-auto">
                                    <div class="badge badge-primary"><?= $emails ?></div>
                                </div>
                            </a>
                            <ul class="sidenav-menu">
                                <li class="sidenav-item">
                                    <a href="<?= base_url() ?>emails" class="sidenav-link">
                                        <i class="sidenav-icon ion ion-ios-filing"></i>
                                        <div>Bandeja de Entrada</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php
                    } elseif ($this->session->userdata('rol') == "3") {
                    ?>
                        <li class="sidenav-item">
                            <a href="<?= base_url() ?>blog" class="sidenav-link">
                                <i class="sidenav-icon feather icon-bold"></i>
                                <div>Blogs</div>
                            </a>
                        </li>
                        <li class="sidenav-item">
                            <a href="<?= base_url() ?>comentarios" class="sidenav-link ">
                                <i class="sidenav-icon feather icon-inbox"></i>
                                <div>Comentarios</div>
                            </a>
                        </li>
                    <?php
                    }elseif ($this->session->userdata('rol') == "4"){
                    ?>
                    
                    <?php 
                    }
                    ?>
                </ul>
            </div>
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">

                    <!-- Brand demo (see assets/css/demo/demo.css) -->
                    <a href="<?= base_url() ?>" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="<?= base_url() ?>assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                        </span>
                        <span class="app-brand-text demo font-weight-normal ml-2">FMI</span>
                    </a>

                    <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
                    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                            <i class="ion ion-md-menu text-large align-middle"></i>
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <!-- Divider -->
                        <hr class="d-lg-none w-100 my-2">


                        <div class="navbar-nav align-items-lg-center ml-auto">

                            <!-- Divider -->
                            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="<?= base_url() ?>assets/img/user/24092019015612_71951_user.png" alt="" class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0"><?= $nombre_rol?></span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?= base_url() ?>site/logout" class="dropdown-item">
                                        <i class="feather icon-power text-danger"></i> &nbsp;Cerrar Sesion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- [ Layout navbar ( Header ) ] End -->