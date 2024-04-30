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
                    <a href="<?= base_url('cotizaciones') ?>" class="app-brand-text demo sidenav-text font-weight-normal ml-4">
                    <span class="app-brand-logo demo">
                            <img src="<?= base_url() ?>assets/images/icon.png" alt="Brand Logo" class="img-fluid">
                        </span>
                    </a>
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                <ul class="sidenav-inner py-1">

                    <!-- Dashboards -->
                    <li class="sidenav-item">
                        <a href="<?= base_url('cotizaciones') ?>" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Dashboards</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <i class="sidenav-icon feather icon-layers"></i>
                            <div>Cotizaciones</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="<?= base_url('formulario-drywall'); ?>" class="sidenav-link">
                                    <div>Drywall</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="<?= base_url() ?>Usuarios" class="sidenav-link">
                            <i class="sidenav-icon feather icon-user"></i>
                            <div>Usuarios</div>
                        </a>
                    </li>

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
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0"></span>
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