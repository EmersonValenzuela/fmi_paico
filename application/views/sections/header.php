<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <title><?= $titulo ?> | NG Educate Perú pagina principal</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- iconos--->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/sysmsoftware_web.jpeg" type="image/png">

    <!-- CSS -->
    <!-- Proveedor CSS (Bootstrap y fuente de iconos) -->

    <!-- <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/default.css"> -->


    <!--===== Plugins CSS (All Plugins Files) =====-->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css"> -->

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Utilice los archivos de la versión reducida que se enumeran a continuación para un mejor rendimiento y elimine los archivos enumerados anteriormente -->

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins/fontawesome.min.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
</head>

<body>

    <!-- inicio del header -->

    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper d-flex flex-wrap justify-content-sm-between">
                    <div class="header-top-left mt-10">
                        <ul class="header-meta">
                            <li><a href="mailto://infoedumate@example.com">info_ngeducate@sysm.com</a></li>
                        </ul>
                    </div>
                    <div class="header-top-right mt-10" style="border:white">
                        <div class="header-link">

                            <?php

                            if ($estado == "1") {
                                echo "<a class='login' href='" . base_url("login") . "'><strong>Iniciar sesión</strong></a>";
                            } else {
                                echo
                                "<a class='login' href='" . base_url("myprofile") . "'><strong>" . $usuario['name'] . "</strong></a>
								<a class='register' href='" . base_url("site/logout") . "'><strong>Salir</strong></a>";
                            }

                            ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="navigation" class="navigation navigation-landscape">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="header-logo">
                            <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/logo.jpeg" width="150" height="120"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 position-static">
                        <div class="nav-toggle"></div>
                        <nav class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <li><a class="" href="<?= base_url(); ?>">Inicio</a></li>
                                <li>
                                    <a class="" href="#">Niveles académicos</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="<?= base_url() ?>superior">Superior: Universitario y técnico</a></li>
                                        <li><a href="<?= base_url() ?>basico">Nivel primaria, secundaria y PRE</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cursos</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li>
                                            <a href="#">Cursos Especialización</a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <?php
                                                $c = 0;
                                                foreach ($cursos as $curso) {
                                                ?>
                                                    <li><a href="<?= base_url(); ?>FCourses?id=<?= $curso['id_curso'] ?>"><?= $curso['nombre_curso'] ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Cursos Secundaria</a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <?php
                                                $c = 0;
                                                foreach ($curss as $curs) {
                                                ?>
                                                    <li><a href="<?= base_url(); ?>FCourses?id=<?= $curs['id_curso'] ?>"><?= $curs['nombre_curso'] ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Cursos Primaria</a>
                                            <ul class="nav-dropdown nav-submenu">
                                                <?php
                                                $c = 0;
                                                foreach ($curstt as $curst) {
                                                ?>
                                                    <li><a href="<?= base_url(); ?>FCourses?id=<?= $curst['id_curso'] ?>"><?= $curst['nombre_curso'] ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Nosotros</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="<?= base_url() ?>about">Misión y Visión</a></li>
                                        <li><a href="<?= base_url(); ?>gallery">Galeria</a></li>
                                        <li><a href="<?= base_url() ?>teachers">Profesores</a></li>
                                    </ul>
                                </li>

                                <li><a href="<?= base_url() ?>blogger">Blog</a></li>
                                <li><a href="<?= base_url() ?>register">Registrate</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- fin Header -->