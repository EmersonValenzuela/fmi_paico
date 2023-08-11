<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url(assets/images/page-banner.jpg);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Mi Pérfil</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Product Details Start ======-->

<section class="product-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <div class="product-details-tab">
                        <ul class="nav nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="active" data-toggle="tab" href="#description" role="tab">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#information" role="tab">Editar Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#reviews" role="tab">Comentarios</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="description" role="tabpanel">

							<div class="product-information table-responsive">
								<div class="col-lg-12">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="table-title">
                                                    <h4 class="title">Nombre</h4>
                                                </td>
                                                <td class="table-content">
                                                    <p><?=$user_data->name?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-title">
                                                    <h4 class="title">Correo Electronico</h4>
                                                </td>
                                                <td class="table-content">
                                                    <p><?=$user_data->email?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-title">
                                                    <h4 class="title">Número de Celular</h4>
                                                </td>
                                                <td class="table-content">
                                                    <p><?=$user_data->phone?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-title">
                                                    <h4 class="title">Usuario</h4>
                                                </td>
                                                <td class="table-content">
                                                    <p><?=$user_data->username?></p>
                                                </td>
                                            </tr>
											<tr>
                                                <td class="table-title">
                                                    <h4 class="title">Foto</h4>
                                                </td>
                                                <td class="table-content">
												<?php
													if($user_data->photo!=""){
												?>
                                                    <img src="assets\img\user\<?=$user_data->photo?>" heigth="100px" width="100px">
													<?php
													}else{													
													?>
													<p>Añadir foto desde<strong> Editar Perfil</strong></p>
													<?php
													}
													?>
                                                </td>
                                            </tr>
                                        </tbody>
									</table>
								</div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="information" role="tabpanel">
							<div class="product-reviews">
							<div class="review-form">

								<div class="review-form-wrapper">
									<form action="<?= base_url(); ?>myprofile/modUser" method="post" autocomplete="off" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-6">
												<div class="single-form">
													<input type="text" name="name" placeholder="Nombre" value="<?=$user_data->name?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="single-form">
													<input type="text" name="phone" placeholder="Número de Celular" value="<?=$user_data->phone?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="single-form">
													<input type="email" name="email" placeholder="Email" value="<?=$user_data->email?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="single-form">
													<input type="text" name="usuario" placeholder="Usuario" value="<?=$user_data->username?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="single-form">
													<input type="text" name="pass" placeholder="Contraseña" value="<?=$user_data->pass?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="single-form">
													<input type="file" name="file_name" placeholder="imagen" value="">
												</div>
											</div>
											<div class="col-md-12">
												<div class="single-form">
													<button class="main-btn">Cambiar</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							</div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<br>

<!--====== Product Details Ends ======-->

