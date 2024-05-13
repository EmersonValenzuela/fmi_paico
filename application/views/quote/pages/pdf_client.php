<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Cotización | FMI</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire Pro Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs.">
    <meta name="keywords" content="admin template, bootstrap admin template, bootstrap dashboard, admin theme, dashboard template, bootstrap dashboard template, bootstrap admin panel, dashboard theme, best admin template, dashboard theme, website templates, bootstrap 4 admin template">
    <meta name="author" content="Codedthemes">
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon.ico">
    <link href="../../../css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/ionicons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/linearicons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/shreerang-material.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <style>
        html,
        body {
            background: #fff !important;
        }

        body> :not(.invoice-print) {
            display: none !important;
        }

        .invoice-print {
            min-width: 768px !important;
            font-size: 15px !important;
        }

        .invoice-print * {
            border-color: #aaa !important;
            color: #000 !important;
        }
    </style>
</head>

<body>
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>

    <!-- Content -->

    <div class="invoice-print p-5">
        <div class="row">
            <div class="col-sm-6 pb-4">
                <div class="media align-items-center mb-4">
                    <a href="index.html" class="navbar-brand app-brand demo py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="<?= base_url(); ?>assets/images/icon.png" alt="Brand Logo" class="img-fluid">
                        </span>
                        <span class="app-brand-text demo font-weight-bold text-dark ml-2">FABRICACIONES METÁLICAS INFANTES EIRL.
                        </span>
                    </a>
                </div>
                <div class="mb-1">Oficina, A.H. Sarita Colonia Mz. “O” Lt “6” 1er Sector- Callao</div>
                <div class="mb-1">RUC: 20538257614</div>
                <div>Cel: 947181222</div>
            </div>
            <div class="col-sm-6 text-right pb-4">
                <h3 class="font-weight-bold mb-3">Cotización C-<?= $row->id_drw ?></h3>
                <div class="mb-1">Fecha de la factura:
                    <strong class="font-weight-semibold"><?= fecha($row->date_drw) ?></strong>
                </div>
                <div>Fecha de vencimiento:
                    <strong class="font-weight-semibold"><?= fecha($row->date_ex_drw) ?></strong>
                </div>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row">
            <div class="col-sm-6 mb-4">
                <div class="font-weight-bold mb-2">Dirigido a:</div>
                <div><?= $row->name_drw ?></div>
                <div><?= $row->number_drw ?></div>
                <div><?= $row->email_drw ?></div>
            </div>

        </div>
        <div class="table-responsive mb-4">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th class="py-3 w-75">
                            Descripción
                        </th>
                        <th></th>

                        <th class="py-3">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-3" colspan="3">
                            <div class="font-weight-semibold"> Cotizacion de <?= $row->line_meters_drw ?> metros lineales</div>
                        </td>

                    </tr>
                    <tr>
                        <td class="py-3">
                            <div class="font-weight-semibold">Monto a Todo Costo</div>
                        </td>
                        <td></td>
                        <td class="py-3">
                            <strong> <?= "S/. " . $row->material_cos ?> </strong>
                        </td>

                    </tr>
                    <tr>
                        <td class="py-3">
                            <div class="font-weight-semibold"> Monto Mano de obra</div>
                        </td>
                        <td></td>
                        <td class="py-3">
                            <strong><?= "S/. " . $row->job_cos ?></strong>
                        </td>

                    </tr>

                    <tr>
                        <td></td>
                        <td class="text-right py-3">
                            Total de Materiales:
                            <br> Mano de obra:
                            <br>
                            <span class="d-block text-big mt-2">Total:</span>
                        </td>
                        <td class="py-3">
                            <strong><?= "S/. " . $row->material_cos ?></strong>
                            <br>
                            <strong><?= "S/. " . $row->job_cos ?></strong>
                            <br>
                            <strong class="d-block text-big mt-2"><?= "S/. " . $row->total ?></strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- / Content -->

    <!-- Core scripts -->
    <script src="<?= base_url(); ?>assets/js/pace.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/material-ripple.js"></script>
    <script src="<?= base_url(); ?>assets/js/layout-helpers.js"></script>
    <script src="<?= base_url(); ?>assets/libs/popper/popper.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>assets/js/sidenav.js"></script>

    <!-- Libs -->
    <script src="<?= base_url(); ?>assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <!-- Demo -->
    <script src="<?= base_url(); ?>assets/js/demo.js"></script>
    <script src="<?= base_url(); ?>assets/js/analytics.js"></script>
    <script>
        // -------------------------------------------------------------------------
        // Print on window load
        /*
                $(function() {
                    window.print();
                });
                */
    </script>
</body>

</html>