                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <h4 class="font-weight-bold py-3 mb-0">Editar Perfil</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item">Profesores</li>
								<li class="breadcrumb-item active">Perfil</li>
								<li class="breadcrumb-item active">Editar Perfil</li>
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
										<form action="<?= base_url(); ?>bteachers/modteacher" method="post" enctype="multipart/form-data">
                                            <div class="card-body media align-items-center">
                                                <img src="<?= base_url();?>assets/img/teachers/<?=$teacher['foto']?>" alt="" class="d-block ui-w-80">
                                                <div class="media-body ml-4">
                                                    <label class="btn btn-outline-primary">
                                                        Subir Nueva Foto
                                                        <input type="file" name="file_name" class="account-settings-fileinput">
                                                    </label> &nbsp;
                                                    
                                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                                </div>
                                            </div>
                                            <hr class="border-light m-0">

                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="form-label">Nombres</label>
													<input type="text" class="form-control mb-1" name="name" value="<?=$teacher['name']?>">
													<input type="hidden" name="foto" value="<?=$teacher['foto']?>">
													<input type="hidden" name="idteacher" value="<?=$teacher['id']?>">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Profesión</label>
                                                    <input type="text" class="form-control" name="profession" value="<?=$teacher['profession']?>">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Asignación</label>
                                                    <input type="text" class="form-control mb-1" name="designation" value="<?=$teacher['designation']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Concepto</label>
                                                    <textarea id="autosize-demo" rows="3" name="concept" class="form-control"><?=$teacher['concept']?></textarea>
                                                    
												</div>						
												<div class="text-right mt-3">
												<button class="btn btn-secondary">Cancelar</button>&nbsp;
													<button class="btn btn-primary">Guardar Cambio</button>&nbsp;
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

    <!-- Demo -->
    <script src="<?= base_url();?>assets/js/demo.js"></script><script src="<?= base_url();?>assets/js/analytics.js"></script>
	<script src="<?= base_url();?>assets/js/pages/pages_account-settings.js"></script>
	<script src="<?= base_url();?>assets/js/pages/forms_extras.js"></script>
</body>

