    <!--====== Page Banner Start ======-->
	
    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(assets/images/page-banner.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Detalle Curso</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Courses Details Start ======-->

    <section class="courses-details">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <div class="courses-details-content mt-50">
                        <img style="text-align:center" src="assets/img/cursos/<?=$curso['img_curso']?>" alt="">

                        <h2 class="title" style="text-align:center"><?=$curso['nombre_curso']?></h2>

                        <?=$curso['descripcion_curso']?>
                    </div>

                    <div class="courses-details-tab">
                        <ul class="nav nav-justified" role="tablist">
                            <li class="nav-item"><a class="active" data-toggle="tab" href="#benefit" role="tab">Beneficios</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#curriculum" role="tab">Silabus Curso </a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#teachers" role="tab">Profesor</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#reviews" role="tab">Blogs Referentes</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="benefit" role="tabpanel">
                                <div class="benefit-content">
                                <?=$curso['beneficio_curso']?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="curriculum" role="tabpanel">
                                <div class="curriculum-content">
                                    <div class="row">
                                    <?=$curso['silabus_curso']?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="teachers" role="tabpanel">
                                <div class="courses-teachers">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="single-teacher mt-30 text-center">
                                                <div class="teacher-social">
                                                    <!--<ul class="social">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>-->
                                                </div>
                                                <div class="teacher-image">
                                                    <a href="teacher-details.html">
                                                        <img src="assets\img\teachers\<?=$curso['foto']?>" alt="teacher">
                                                    </a>
                                                </div>
                                                <div class="teacher-content">
                                                    <h4 class="name"><a href="<?= base_url(); ?>teachers/teacherdetails?id=<?=$curso['id']?>"><?=$curso['name']?></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="courses-reviews">
								<?php
									foreach ($blogs as $blog) {
								?>				
									<div class="col-lg-4 col-md-6">
										<div class="single-blog mt-30">
											<div class="blog-image">
												
													<img src="assets/img/blog/<?=$blog['image']?>" alt="blog">
												
											</div>
											<div class="blog-content">
												<ul class="meta">
													<li><a href="#"><?=$blog['fecha']?></a></li>
													
													<li><a href="#"><?=$blog['hora']?></a></li>
												</ul>
												<h4 class="blog-title"><?=$blog['title']?></h4>
												<form action="<?= base_url(); ?>detalle" method="post">
												<input type="hidden" name="idblog" value="<?=$blog['id']?>">
												<button class="btn btn-primary btn-lg">Leer Más<i class="fal fa-chevron-right"></i></button>
												</form>
											</div>
										</div>
									</div>
									<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--====== Courses Details Ends ======-->

<br>
<?php echo $msj; ?>
