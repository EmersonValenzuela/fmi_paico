<!-- [ Layout content ] Start -->
<div class="layout-content">
    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Usuarios</h4>
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
                            <div class="col-sm-6">
                                <?= $error; ?>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i>Agregar Usuario</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Nombre de Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Rol</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($usuarios as $user) {
                                    ?>
                                        <tr>
                                            <td data-id="<?= $user['id'] ?>">
                                                <img src="assets\img\user\<?= $user['photo'] ?>" class="img-fluid img-radius wid-40" alt="">
                                            </td>
                                            <td><?= $user['name'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><?= $user['phone'] ?></td>
                                            <td><?= $user['username'] ?></td>
                                            <td><?= $user['pass'] ?></td>
                                            <?php
                                            if ($user['idRol'] == 1) {
                                                echo "<td><span class='badge badge-danger'>Admin</span></td>";
                                            } else {
                                                echo "<td><span class='badge badge-success'>Cliente</span></td>";
                                            } ?>

                                            <td>
                                                <?php
                                                if ($user['idRol'] == 1) {
                                                ?>




                                                <?php
                                                } else {
                                                ?>
                                                    <form action="<?= base_url(); ?>usuario/delet" method="post">
                                                        <input type="hidden" value="<?= $user['id'] ?>" name="id">
                                                        <button href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </button>
                                                    </form>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        <?php
                                    }
                                        ?>
                                        </tr>
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
            <div class="pt-3">
                <span class="float-md-right d-none d-lg-block">&copy; Exclusive on Themeforest | Hand-crafted &amp; Made with <i class="fas fa-heart text-danger mr-2"></i></span>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Nuevo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('usuario/add_user'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
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
                                <input type="text" class="form-control" id="Password" placeholder="" name="phone" required>
                            </div>  
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Phone">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="Phone" placeholder="" name="name_user" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Phone">Contraseña</label>
                                <input type="text" class="form-control" id="Phone" placeholder="" name="password" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Sex">Tipo de Usuario</label>
                                <select class="form-control" id="Sex" name="rol">
                                    <option value="3">Blogs</option>
                                    <option value="4">Cotizaciones</option>
                                    <option value="2">Cliente</option>
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
                            <button class="btn btn-danger">Cerrar</button>
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

</body>

</html>