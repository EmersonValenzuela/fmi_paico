<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Login | FMI </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template">
    <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="Codedthemes">
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.css">
    <link rel="stylesheet" href="assets/fonts/linearicons.css">
    <link rel="stylesheet" href="assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="assets/css/shreerang-material.css">
    <link rel="stylesheet" href="assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <!-- Page -->
    <link rel="stylesheet" href="assets/css/pages/authentication.css">
</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->
    <!-- [ content ] Start -->
    <div class="authentication-wrapper authentication-3">
        <div class="authentication-inner">

            <!-- [ Side container ] Start -->
            <!-- Do not display the container on extra small, small and medium screens -->
            <div class="d-none d-lg-flex col-lg-8 align-items-center ui-bg-cover ui-bg-overlay-container p-5" style="background-image: url('assets/img/bg/21.jpg');">
                <div class="ui-bg-overlay bg-dark opacity-50"></div>
                <!-- [ Text ] Start -->
                <div class="w-100 text-white px-5">

                </div>
                <!-- [ Text ] End -->
            </div>
            <!-- [ Side container ] End -->

            <!-- [ Form container ] Start -->
            <div class="d-flex col-lg-4 align-items-center bg-white p-5">
                <!-- Inner container -->
                <!-- Have to add `.d-flex` to control width via `.col-*` classes -->
                <div class="d-flex col-sm-7 col-md-5 col-lg-12 px-0 px-xl-4 mx-auto">
                    <div class="w-100">

                        <!-- [ Logo ] Start -->
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="ui-w-60">
                                <div class="w-100 position-relative">
                                    <img src="assets/images/logo_min.png" alt="Brand Logo" class="img-fluid">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Logo ] End -->

                        <h4 class="text-center text-lighter font-weight-normal mt-5 mb-0">Ingrese a su cuenta</h4>
                        <?php
                        if ($error != "") {
                        ?>
                            <div class="container">
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;</button>
                                    <strong>Error de Acceso.</strong> <?= $error ?>, por favor verifique los datos e intente de nuevo.
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- [ Form ] Start -->
                        <form class="my-5" action="<?= base_url() ?>login" method="post">
                            <div class="form-group">
                                <label class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="user">
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label d-flex justify-content-between align-items-end">
                                    <span>Contraseña</span>
                                </label>
                                <input type="password" class="form-control" name="password">
                                <div class="clearfix"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center m-0">
                                <label class="custom-control custom-checkbox m-0">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-label">Recordarme</span>
                                </label>
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                            </div>
                        </form>
                        <!-- [ Form ] End -->
                    </div>
                </div>
            </div>
            <!-- [ Form container ] End -->

        </div>
    </div>
    <!-- [ content ] End -->

    <!-- Core scripts -->
    <script src="assets/js/pace.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/libs/popper/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/sidenav.js"></script>
    <script src="assets/js/layout-helpers.js"></script>
    <script src="assets/js/material-ripple.js"></script>

    <!-- Libs -->
    <script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <!-- Demo -->
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/analytics.js"></script>

</body>

</html>