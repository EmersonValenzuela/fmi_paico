<!-- [ Layout content ] Start -->
<div class="layout-content">
    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Comentarios</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item active"><a href="#!">Comentarios</a></li>
            </ol>
        </div>
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Usuario</th>
                                        <th>Blog</th>
                                        <th>Comentario</th>
                                        <th>Fecha</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
									foreach ($comments as $comment) {
										?>		
                                    <tr data-id="<?=$comment['id']?>">
                                        <td>
                                            <img src="assets/img/blog/<?=$comment['image']?>" class="img-fluid img-radius wid-40" alt="">
                                        </td>
                                        <td><?=$comment['name']?></td>
                                        <td><?=$comment['title']?></td>
                                        <td><?=$comment['comentario']?></td>
                                        <td><?=$comment['fecha']?></td>
                                        <td>
										<form action="<?= base_url(); ?>comentarios/delet" method="post">
										<input type="hidden" value="<?=$comment['id']?>" name="id">
										<button href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Eliminar </button>
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
            <div class="pt-3">
                <span class="float-md-right d-none d-lg-block">&copy; Exclusive on Themeforest | Hand-crafted &amp; Made with <i class="fas fa-heart text-danger mr-2"></i></span>
            </div>
            <div>
                <a href="javascript:" class="footer-link pt-3">About Us</a>
                <a href="javascript:" class="footer-link pt-3 ml-4">Help</a>
                <a href="javascript:" class="footer-link pt-3 ml-4">Contact</a>
                <a href="javascript:" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
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
