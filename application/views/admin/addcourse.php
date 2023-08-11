
				<!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <h4 class="font-weight-bold py-3 mb-0">Agregar Curso</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                
								<li class="breadcrumb-item ">Cursos</li>
								<li class="breadcrumb-item active">Agregar Curso</li>
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
										<form action="<?= base_url(); ?>courses/add" method="post" enctype="multipart/form-data">
                                            <div class="card-body media align-items-center">
                                                <img src="<?= base_url();?>assets/img/cursos/tricu.jpg" alt="" class="d-block ui-w-80">
                                                <div class="media-body ml-4">
                                                    <label class="btn btn-outline-primary">
                                                        Subir Foto
                                                        <input type="file" name="file_name" class="account-settings-fileinput">
                                                    </label> &nbsp;
                                                    
                                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                                </div>
                                            </div>
                                            <hr class="border-light m-0">
											

                                            <div class="card-body">
											<div class="form-group">
												<h6>Seleccionar Categoria</h6>
												<select class="select2-demo form-control" style="width: 100%" data-allow-clear="true" name="categoria">
													<option>. . .</option>
													<?php
														foreach($categorias as $category){
													?>
													<option value="<?=$category['id_categoria']?>"><?=$category['nombre_categoria']?></option>
													<?php
												}
												?>
												</select>
												</div>
                                                <div class="form-group">
                                                    <label class="form-label">Nombre Curso</label>
													<input type="text" class="form-control mb-1" name="nombre_curso" value="">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Descripción Curso</label>
                                                    <textarea id="autosize-demo" rows="3" name="descripcion_curso" class="form-control"></textarea>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Beneficio Curso</label>
                                                    <textarea id="autosize-demo" rows="3" name="beneficio_curso" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Silabus Curso</label>
                                                    <textarea id="autosize-demo" rows="3" name="silabus_curso" class="form-control"></textarea>
                                                    
												</div>
												<div class="form-group">
												<h6>Seleccionar Profesor</h6>
												<select class="select2-demo form-control" style="width: 100%" data-allow-clear="true" name="id_profesor">
													<option>. . .</option>
													<?php
														foreach($teachers as $teacher){
													?>
													<option value="<?=$teacher['id']?>"><?=$teacher['name']?></option>
													<?php
												}
												?>
												</select>
												</div>

				
												<div class="text-right mt-3">
												<button class="btn btn-secondary">Cancelar</button>&nbsp;
													<button  class="btn btn-primary">Registrar curso</button>&nbsp;
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
    <script src="<?= base_url();?>assets/js/pace.js"></script>
    <script src="<?= base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url();?>assets/libs/popper/popper.js"></script>
    <script src="<?= base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url();?>assets/js/sidenav.js"></script>
    <script src="<?= base_url();?>assets/js/layout-helpers.js"></script>
    <script src="<?= base_url();?>assets/js/material-ripple.js"></script>

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
</body>

