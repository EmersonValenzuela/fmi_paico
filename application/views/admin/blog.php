
                <!-- [ Layout content ] Start -->
                <div class="layout-content">
                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <h4 class="font-weight-bold py-3 mb-0">Blogs</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item active"><a href="#!">Blogs</a></li>
                            </ol>
                        </div>
                        <div class="row">
                            <!-- customar project  start -->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-sm-6">
												<?=$error;?>
											   </div>
                                            <div class="col-sm-6 text-right">
                                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Blogs</button>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="report-table" class="table mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Titulo</th>
                                                        <th>Descripción</th>
                                                        <th>Fecha</th>
														<th>Hora</th>
														<th>curso</th>
														<th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
												foreach ($blogs as $blog) {
													?>
                                                    <tr data-id="<?=$blog['id']?>">
                                                        <td class="align-middle" >
                                                            <img src="<?= base_url(); ?>assets/img/blog/<?=$blog['image']?>" alt="<?=$blog['image']?>" title="contact-img" class="rounded mr-3" height="48">
                                                            <p class="m-0 d-inline-block align-middle font-16">
                                                                <a href="#!" class="text-body"><?=$blog['title']?></a>
                                                                
                                                            </p>
                                                        </td>
                                                        <td class="align-middle" style="float: left;  white-space: nowrap;  overflow: hidden;text-overflow: ellipsis;">
														<?=$blog['description']?>
                                                        </td>
                                                        <td class="align-middle">
														<?=$blog['fecha']?>
														</td>
                                                        <td class="align-middle">
														<?=$blog['hora']?>
														</td>
                                                        <td class="align-middle">
														<?=$blog['nombre_curso']?>
														</td>														
                                                        <td class="table-action">
                                                            
															<form action="<?= base_url(); ?>blog/editblog" method="post">
															<input type="hidden" value="<?=$blog['id']?>" name="id">
                                                            <button class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></button>
															</form>
															<form action="<?= base_url(); ?>blog/delete" method="post">
															<input type="hidden" value="<?=$blog['id']?>" name="id">
                                                            <button class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></button>
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
                            <!-- customar project  end -->
                        </div>
                    </div>
                    <!-- [ content ] End -->
                    <!-- [ Layout footer ] Start -->
                    <nav class="layout-footer footer footer-light">
                        <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">

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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>blog/addBlog" method="post" enctype="multipart/form-data">
                    <div class="row">
					<div class="col-sm-12">
					<div class="form-group">
						<label class="floating-label" for="Name">Seleccionar Curso</label>
							<select class="select2-demo form-control" style="width: 100%" data-allow-clear="true" name="curso">
							<option>. . .</option>
								<?php
									foreach($cursos as $curso){
								?>
								<option value="<?=$curso['id_curso']?>"><?=$curso['nombre_curso']?></option>
								<?php
								}
								?>
							</select>
							</div>
						</div>					
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Titulo</label>
                                <input type="text" class="form-control" name="name" id="Name" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="Address">Descripción</label>
                                <textarea class="form-control" id="Address" rows="3" name="description"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon">Imagen Blog <strong>370 x 250 pixels</strong> </label>
                                <input type="file" name="file_name" class="form-control" id="Icon" placeholder="sdf">
                            </div>
                        </div>
						
                        <div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon">Imagen Detalle <strong>771 x 439 pixels</strong> </label>
                                <input type="file" name="file_name2" class="form-control" id="Icon" placeholder="sdf">
                            </div>
                        </div>
						
                        <div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon">Imagen Posts <strong>71 x 71 pixels</strong> </label>
                                <input type="file" name="file_name3" class="form-control" id="Icon" placeholder="sdf">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary">Guardar</button>
                            <button aria-label="Close" data-dismiss="modal" class="btn btn-danger">Cerrar</button>
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
    <script src="<?= base_url();?>assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url();?>assets/libs/select2/select2.js"></script>
	<script src="<?= base_url();?>assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
	<script src="<?= base_url();?>assets\libs\autosize\autosize.js"></script>
	<script src="<?= base_url();?>assets\libs\vanilla-text-mask\vanilla-text-mask.js"></script>
    <script src="<?= base_url();?>assets\libs\vanilla-text-mask\text-mask-addons.js"></script>
    <script src="<?= base_url();?>assets\libs\knob\knob.js"></script>
    <script src="<?= base_url();?>assets\libs\bootstrap-maxlength\bootstrap-maxlength.js"></script>
    <script src="<?= base_url();?>assets\libs\pwstrength-bootstrap\pwstrength-bootstrap.js"></script>
	<script src="<?= base_url();?>assets\libs\bootstrap-select\bootstrap-select.js"></script>
    <script src="<?= base_url();?>assets\libs\growl\growl.js"></script>
    <script src="<?= base_url();?>assets\libs\toastr\toastr.js"></script>
    <!-- Demo -->
    <script src="<?= base_url();?>assets/js/demo.js"></script><script src="<?= base_url();?>assets/js/analytics.js"></script>
	<script src="<?= base_url();?>assets/js/pages/pages_account-settings.js"></script>
	<script src="<?= base_url();?>assets/js/pages/forms_extras.js"></script>
	<script src="<?= base_url();?>assets\js\pages\forms_selects.js"></script>
	<script src="<?= base_url();?>assets\js\pages\ui_notifications.js"></script>
    <!-- Demo -->
    <script src="assets\js\demo.js"></script>
    <script>
        // DataTable start
        $('#report-table').DataTable({
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ]
        });
        // DataTable end
    </script>
</body>

</html>
