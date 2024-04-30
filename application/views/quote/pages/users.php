<!-- [ Layout content ] Start -->
<div class="layout-content">
    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Título de la página -->
        <h4 class="font-weight-bold py-3 mb-0">Usuarios</h4>
        <!-- Breadcrumbs -->
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item active"><a href="#!">Usuarios</a></li>
            </ol>
        </div>
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <!-- Botón para agregar nuevo usuario -->
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i>Agregar Usuario</button>
                            </div>
                        </div>
                        <!-- Tabla para mostrar los usuarios -->
                        <div class="table-responsive">
                            <table id="data-users" class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Nombre de Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
    </div>
    <!-- [ content ] End -->
</div>
<!-- [ Layout content ] Start -->
</div>
<!-- [ Layout container ] End -->
</div>
<!-- Overlay -->
<div class="layout-overlay layout-sidenav-toggle"></div>
</div>
<!-- [ Layout wrapper] End -->

<!-- Modal para agregar nuevo usuario -->
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Nuevo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="add_user" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Nombres</label>
                                <input type="text" class="form-control" placeholder="" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Email">Email</label>
                                <input type="email" class="form-control" placeholder="" name="email" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="Password">Celular</label>
                                <input type="text" class="form-control" placeholder="" name="phone" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Phone">Nombre de Usuario</label>
                                <input type="text" class="form-control" placeholder="" name="name_user" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Phone">Contraseña</label>
                                <input type="text" class="form-control" placeholder="" name="password" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Sex">Tipo de Usuario</label>
                                <select class="form-control" name="rol">
                                    <option value="4">Administrador</option>
                                    <option value="5">Cotizador</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon">Imagen Perfil</label>
                                <input type="file" class="form-control" id="Icon" placeholder="sdf" name="img_profile">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary">Agregar</button>
                            <button type="button" class="btn btn-danger" id="btnCloseModal">Cerrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="edit_user" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" id="iduser" name="iduser">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Nombres</label>
                                <input type="text" class="form-control" id="Name" placeholder="" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Email">Email</label>
                                <input type="email" class="form-control" id="Email" placeholder="" name="email" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="Password">Celular</label>
                                <input type="text" class="form-control" id="phone" placeholder="" name="phone" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Phone">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="nameuser" placeholder="" name="name_user" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Phone">Contraseña</label>
                                <input type="text" class="form-control" id="password" placeholder="" name="password" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Sex">Tipo de Usuario</label>
                                <select class="form-control" id="rol" name="rol">
                                    <option value="4">Administrador</option>
                                    <option value="5">Cotizador</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon">Imagen Perfil</label>
                                <input type="file" class="form-control" placeholder="sdf" name="img_profile">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger" id="btnCloseModalEdit">Cerrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>