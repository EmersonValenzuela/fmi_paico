                <!-- [ Layout content ] Start -->
                <div class="layout-content">
                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <h4 class="font-weight-bold py-3 mb-0">Profesor</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Profesores</a></li>
                                <li class="breadcrumb-item active"><a href="#!">Lista</a></li>
                            </ol>
                        </div>
                        <div class="row">
                            <!-- subscribe start -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Lista de Profesores</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-sm-6">
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Agregar Profesor</button>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Foto</th>
                                                        <th>Nombres</th>
                                                        <th>Profesion</th>
                                                        <th>Asignación</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
												foreach ($teachers as $teacher) {
													?>
                                                    <tr data-id="<?=$teacher['id']?>">
                                                        <td><img src="<?= base_url();?>assets/img/teachers/<?=$teacher['foto']?>" alt="<?=$teacher['foto']?>" class="img-radius" width="30px" height="30px"></td>
                                                        <td><?=$teacher['name']?></td>
                                                        <td><?=$teacher['profession']?></td>
                                                        <td><?=$teacher['designation']?></td>
                                                        <td>
														<form action="<?= base_url();?>bteachers/profile" method="post">
														<input type="hidden" name="id" value="<?=$teacher['id']?>">
                                                            <button class="btn btn-info btn-sm" data-style="slide-up">Ver</button>
														</form>
														<form action="<?= base_url();?>bteachers/deleteteacher" method="post">
														<input type="hidden" name="id" value="<?=$teacher['id']?>">
                                                            <button class="btn btn-danger btn-sm" data-style="slide-up">Eliminar</button>
														</form>
                                                        </td>
                                                    </tr>
													<?php
												}
												?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- subscribe end -->
                        </div>
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
    </div>
    <!-- [ Layout wrapper] End -->
    <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Profesor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url(); ?>bteachers/addteacher" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Name">Nombres</label>
									<input type="text" class="form-control" id="Name" placeholder="" name="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Email">Profesión</label>
                                    <input type="text" class="form-control" id="Email" placeholder="" name="profession">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Password">Asignación</label>
                                    <input type="text" class="form-control" id="Password" placeholder="" name="designation">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="Address">Concepto</label>
                                    <textarea class="form-control" id="Address" rows="3" name="concept"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Icon">Foto</label>
                                    <input type="file" class="form-control" id="Icon" placeholder="sdf" name="file_name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-primary">Guardar</button>
                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Core scripts -->
    <script src="assets\js\pace.js"></script>
    <script src="assets\js\jquery-3.3.1.min.js"></script>
    <script src="assets\libs\popper\popper.js"></script>
    <script src="assets\js\bootstrap.js"></script>
    <script src="assets\js\sidenav.js"></script>
    <script src="assets\js\layout-helpers.js"></script>
    <script src="assets\js\material-ripple.js"></script>

    <!-- Libs -->
    <script src="assets\libs\perfect-scrollbar\perfect-scrollbar.js"></script>
    <script src="assets\libs\datatables\datatables.js"></script>
    <!-- Demo -->
    <script src="assets\js\demo.js"></script>
    <script>
        // DataTable start
        $('#report-table').DataTable();
        // DataTable end
    </script>
</body>

</html>
