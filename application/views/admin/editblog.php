<!-- [ Layout content ] Start -->
<div class="layout-content">

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Editar Blog</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>

                <li class="breadcrumb-item ">Blogs</li>
                <li class="breadcrumb-item active">Editar Blog</li>
            </ol>
        </div>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>


                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="account-general">
                            <form action="<?= base_url(); ?>blog/edit" method="post" enctype="multipart/form-data">

                                <hr class="border-light m-0">
                                <input type="hidden" name="foto1" value="<?= $blog['image'] ?>">
                                <input type="hidden" name="foto2" value="<?= $blog['image2'] ?>">
                                <input type="hidden" name="foto3" value="<?= $blog['image3'] ?>">

                                <div class="card-body">
                                    <div class="form-group">

                                        <input type="hidden" name="idblog" value="<?= $blog['id'] ?>">
                                        <h6>Seleccionar Curso</h6>
                                        <select class="select2-demo form-control" style="width: 100%" data-allow-clear="true" name="curso">
                                            <option value="<?= $blog['curso'] ?>"><?= $blog['nombre_curso'] ?></option>
                                            <?php
                                            foreach ($cursos as $curso) {
                                            ?>
                                                <option value="<?= $curso['id_curso'] ?>"><?= $curso['nombre_curso'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Titulo</label>
                                        <input type="text" class="form-control mb-1" name="title" value="<?= $blog['title'] ?>">
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Descripción Blog</label>
                                        <textarea id="autosize-demo" rows="3" name="description" class="form-control"><?= $blog['description'] ?></textarea>
                                        <div class="clearfix"></div>
                                    </div>


                                    <div class="text-right mt-3">
                                        <button class="btn btn-secondary">Cancelar</button>&nbsp;
                                        <button class="btn btn-primary">Registrar curso</button>&nbsp;
                                    </div>
                                </div>
                                <form>
                        </div>

                    </div>

                    <br>
                </div>
                <!-- [ content ] End -->

                <!-- [ Layout footer ] Start -->
                <nav class="layout-footer footer footer-light">
                    <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                        <div class="pt-3">

                        </div>
                    </div>
                </nav>
                <!-- [ Layout footer ] End -->

            </div>
            <!-- [ Layout content ] Start -->

        </div>
        <!-- [ Layout container ] End -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>

    <?php
    echo $msj;
    ?>

</div>
<!-- [ Layout wrapper ] end -->

<!-- Core scripts -->
<script src="<?= base_url(); ?>assets/js/pace.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/popper/popper.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
<script src="<?= base_url(); ?>assets/js/sidenav.js"></script>
<script src="<?= base_url(); ?>assets/js/layout-helpers.js"></script>
<script src="<?= base_url(); ?>assets/js/material-ripple.js"></script>

<!-- Libs -->
<script src="<?= base_url(); ?>assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= base_url(); ?>assets/libs/select2/select2.js"></script>
<script src="<?= base_url(); ?>assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="<?= base_url(); ?>assets\libs\autosize\autosize.js"></script>
<script src="<?= base_url(); ?>assets\libs\vanilla-text-mask\vanilla-text-mask.js"></script>
<script src="<?= base_url(); ?>assets\libs\vanilla-text-mask\text-mask-addons.js"></script>
<script src="<?= base_url(); ?>assets\libs\knob\knob.js"></script>
<script src="<?= base_url(); ?>assets\libs\bootstrap-maxlength\bootstrap-maxlength.js"></script>
<script src="<?= base_url(); ?>assets\libs\pwstrength-bootstrap\pwstrength-bootstrap.js"></script>
<script src="<?= base_url(); ?>assets\libs\bootstrap-select\bootstrap-select.js"></script>
<script src="<?= base_url(); ?>assets\libs\growl\growl.js"></script>
<script src="<?= base_url(); ?>assets\libs\toastr\toastr.js"></script>
<!-- Demo -->
<script src="<?= base_url(); ?>assets/js/demo.js"></script>
<script src="<?= base_url(); ?>assets/js/analytics.js"></script>
<script src="<?= base_url(); ?>assets/js/pages/pages_account-settings.js"></script>
<script src="<?= base_url(); ?>assets/js/pages/forms_extras.js"></script>
<script src="<?= base_url(); ?>assets\js\pages\forms_selects.js"></script>
<script src="<?= base_url(); ?>assets\js\pages\ui_notifications.js"></script>
</body>