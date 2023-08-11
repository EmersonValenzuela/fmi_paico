                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <h4 class="font-weight-bold py-3 mb-0">Perfil Profesor</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item">Profesors</li>
                                <li class="breadcrumb-item active">Perfil Profesor</li>
                            </ol>
                        </div>

                        <div class="media align-items-center py-3 mb-3">
                            <img src="<?= base_url(); ?>assets/img/teachers/<?= $teacher['foto'] ?>" alt="" class="d-block ui-w-100 rounded-circle">
                            <div class="media-body ml-4">
                                <h4 class="font-weight-bold mb-0"><?= $teacher['name'] ?></h4>
                                <div class="text-muted mb-2"><?= $teacher['id'] ?></div>
                                <form action="<?= base_url(); ?>bteachers/editteacher" method="post">
                                    <input type="hidden" name="id" value="<?= $idteacher ?>">
                                    <button class="btn btn-primary btn-sm">Editar</button>&nbsp;
                                </form>
                                </a>
                            </div>
                            <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-education"><i class="feather icon-plus"></i> Agregar Educación</button>
                            <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-experience"><i class="feather icon-plus"></i> Agregar Experiencia</button>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <table class="table user-view-table m-0">
                                    <tbody>
                                        <tr>
                                            <td>Registrado:</td>
                                            <td><?= $teacher['register'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Profesión:</td>
                                            <td><?= $teacher['profession'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Asignación:</td>
                                            <td>
                                                <?= $teacher['designation'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Concepto:</td>
                                            <td><?= $teacher['concept'] ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <hr class="border-light m-0">
                            <div class="table-responsive">
                                <table class="table card-table m-0 table-dark">
                                    <tbody>
                                        <tr>
                                            <th>EDUCACIÓN</th>
                                            <th>TITULO</th>
                                            <th>ESCUELA</th>
                                            <th>TIEMPO</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                        <?php
                                        $c = 1;
                                        foreach ($educations as $education) {
                                        ?>
                                            <tr>
                                                <td><?= $c++ ?></td>
                                                <td>
                                                    <?= $education['title'] ?></span>
                                                </td>
                                                <td>
                                                    <?= $education['school'] ?></span>
                                                </td>
                                                <td>
                                                    <?= $education['time'] ?></span>
                                                </td>
                                                <td>
                                                    <form action="<?= base_url(); ?>bteachers/deleteeducation" method="post">
                                                        <input type="hidden" name="ided" value="<?= $education['id'] ?>">
                                                        <input type="hidden" name="idteacher" value="<?= $teacher['id'] ?>">
                                                        <button class="btn btn-round btn-outline-danger">Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <hr class="border-light m-0">
                            <br>
                            <div class="table-responsive">
                                <table class="table card-table m-0 table-dark">
                                    <tbody>
                                        <tr>
                                            <th>EXPERIENCIA</th>
                                            <th>ASIGNACIÓN</th>
                                            <th>LUGAR</th>
                                            <th>TIEMPO</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                        <?php
                                        $c = 1;
                                        foreach ($experiences as $experience) {
                                        ?>
                                            <tr>
                                                <td><?= $c++ ?></td>
                                                <td>
                                                    <?= $experience['asignation'] ?></span>
                                                </td>
                                                <td>
                                                    <?= $experience['place'] ?></span>
                                                </td>
                                                <td>
                                                    <?= $experience['time'] ?></span>
                                                </td>
                                                <td>
                                                    <form action="<?= base_url(); ?>bteachers/deleteexperience" method="post">
                                                        <input type="hidden" name="idex" value="<?= $experience['id'] ?>">
                                                        <input type="hidden" name="idteacher" value="<?= $teacher['id'] ?>">
                                                        <button class="btn btn-round btn-outline-danger">Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- <div class="card">
                            <div class="row no-gutters row-bordered">
                                <div class="d-flex col-md align-items-center">
                                    <a href="javascript:void(0)" class="card-body d-block text-dark">
                                        <div class="text-muted small line-height-1">Posts</div>
                                        <div class="text-xlarge">125</div>
                                    </a>
                                </div>
                                <div class="d-flex col-md align-items-center">
                                    <a href="javascript:void(0)" class="card-body d-block text-dark">
                                        <div class="text-muted small line-height-1">Followers</div>
                                        <div class="text-xlarge">534</div>
                                    </a>
                                </div>
                                <div class="d-flex col-md align-items-center">
                                    <a href="javascript:void(0)" class="card-body d-block text-dark">
                                        <div class="text-muted small line-height-1">Following</div>
                                        <div class="text-xlarge">236</div>
                                    </a>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table user-view-table m-0">
                                        <tbody>
                                            <tr>
                                                <td>Username:</td>
                                                <td>nmaxwell</td>
                                            </tr>
                                            <tr>
                                                <td>Name:</td>
                                                <td>Nelle Maxwell</td>
                                            </tr>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td>nmaxwell@mail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Company:</td>
                                                <td>Company Ltd.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h6 class="mt-4 mb-3">Social links</h6>
                                <div class="table-responsive">
                                    <table class="table user-view-table m-0">
                                        <tbody>
                                            <tr>
                                                <td>Twitter:</td>
                                                <td>
                                                    <a href="javascript:void(0)">https://twitter.com/user</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Facebook:</td>
                                                <td>
                                                    <a href="javascript:void(0)">https://www.facebook.com/user</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Instagram:</td>
                                                <td>
                                                    <a href="javascript:void(0)">https://www.instagram.com/user</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h6 class="mt-4 mb-3">Personal info</h6>
                                <div class="table-responsive">
                                    <table class="table user-view-table m-0">
                                        <tbody>
                                            <tr>
                                                <td>Birthday:</td>
                                                <td>May 3, 1995</td>
                                            </tr>
                                            <tr>
                                                <td>Country:</td>
                                                <td>Canada</td>
                                            </tr>
                                            <tr>
                                                <td>Languages:</td>
                                                <td>English</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h6 class="mt-4 mb-3">Contacts</h6>
                                <div class="table-responsive">
                                    <table class="table user-view-table m-0">
                                        <tbody>
                                            <tr>
                                                <td>Phone:</td>
                                                <td>+0 (123) 456 7891</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h6 class="mt-4 mb-3">Interests</h6>
                                <div class="table-responsive">
                                    <table class="table user-view-table m-0">
                                        <tbody>
                                            <tr>
                                                <td>Favorite music:</td>
                                                <td>
                                                    Rock, Alternative, Electro, Drum &amp; Bass, Dance
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Favorite movies:</td>
                                                <td>
                                                    The Green Mile, Pulp Fiction, Back to the Future, WALL·E, Django Unchained
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    [ content ] End -->

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
                <!-- Modal template -->
                <div class="modal modal-top fade" id="modal-education">
                    <div class="modal-dialog">
                        <form class="modal-content" action="<?= base_url(); ?>bteachers/addeducation" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title">Agregando Educación

                                    <br>
                                    <small class="text-muted"><?= $teacher['name'] ?></small>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="form-label">Titulo</label>
                                        <input type="hidden" name="idteacher" value="<?= $teacher['id'] ?>">
                                        <input type="text" class="form-control" placeholder="" name="title">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="form-label">Escuela</label>
                                        <input type="text" class="form-control" placeholder="" name="school">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="form-label">Tiempo</label>
                                        <input type="text" class="form-control" placeholder="" name="time">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <button class="btn btn-primary">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- Modal template -->
                <div class="modal modal-top fade" id="modal-experience">
                    <div class="modal-dialog">
                        <form class="modal-content" action="<?= base_url(); ?>bteachers/addexperience" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title">Agregando Experiencia

                                    <br>
                                    <small class="text-muted"><?= $teacher['name'] ?></small>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="form-label">Asignación</label>
                                        <input type="hidden" name="idteacher" value="<?= $teacher['id'] ?>">
                                        <input type="text" class="form-control" placeholder="" name="asignation">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="form-label">Lugar</label>
                                        <input type="text" class="form-control" placeholder="" name="place">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="form-label">Tiempo</label>
                                        <input type="text" class="form-control" placeholder="" name="time">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <button class="btn btn-primary">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
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

                <!-- Demo -->
                <script src="<?= base_url(); ?>assets/js/demo.js"></script>
                <script src="assets/js/analytics.js"></script>
                </body>

                </html>