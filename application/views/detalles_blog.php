    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(<?= base_url(); ?>assets/images/page-banner.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Detalles Blogs</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Blog Details Start ======-->

    <section class="blog-details-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <div class="details-content mt-50">
                            <img src="<?= base_url(); ?>assets/img/blog/<?=$blog['image2'];?>" alt="">
                            <ul class="meta">
                                <li><a href="#"><?=$blog['fecha'];?></a></li>
                                <li><a href="#"><?=$blog['hora'];?></a></li>
                                <li><a href="#"><?=$ncomentarios?> Comentarios</a></li>
                            </ul>
                            <h3 class="title"><?=$blog['title'];?></h3>

                            <p><?=$blog['description'];?></p>


						</div>
						<div class="blog-comment">
                            <h3 class="comment-title">Comentarios (<?=$ncomentarios?>)</h3>

                            <ul class="comment-items">
							<?php
								foreach ($coms as $com) {
							?>
                                <li>
                                    <div class="single-comment">
                                        <div class="comment-author">
										<?php
										if($com['photo']==""){

										
										?>
                                            <img src="<?= base_url(); ?>assets/images/2.png" alt="">
										<?php
										}else{
										?>
										<img src="<?= base_url(); ?>assets/img/user/<?=$com['photo']?>" width="100px"  alt="">
										<?php
										}
										?>
                                        </div>
                                        <div class="comment-content">
                                            <div class="meta">
                                                <h5 class="name"><?=$com['name']?></h5>
                                                <span class="time"><?=$com['fecha']?></span>
                                            </div>
                                            <p><?=$com['comentario']?></p>
                                            
                                        </div>
                                    </div>
								</li>
								<?php
								}
								?>
                            </ul>
                        </div>

                        <div class="blog-comment">
						<?php
							if($estado == "2"){
						?>
                            <h3 class="comment-title">Escribe tu Comentario</h3>

                            <div class="comment-form">
                                <form action="<?= base_url();?>comentarios/addComment" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-form">
												<input type="hidden" name="idblog" value="<?=$blog['id']?>">
                                                <textarea placeholder="Escribe tu comentario..." rows="3" colds="2" name="comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <button class="main-btn">Comentar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
							<?php
							} else {
							?>
							<h3 class="comment-title"><strong><a href="<?= base_url(); ?>login">Iniciar Sesión</a></strong> o <strong><a href="<?= base_url(); ?>register">Registrarse</a></strong> para comentar este Blog.</h3>
							<?php
							}
							?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar right-sidebar pt-20">

                        <div class="blog-sidebar-post mt-30">
                            <div class="sidebar-title">
                                <h4 class="title">BLogs Recientes</h4>
                            </div>
                            <ul class="post-items">
							<?php
								foreach ($sids as $sid) {
							?>
                                <li>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <img src="<?= base_url();?>assets/img/blog/<?=$sid['image3']?>" alt="">
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="#"><?=$sid['title']?></a></h4>
                                            <a href="#" class="more">Leer Más <i class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
								<?php
								}
								?>
                            </ul>
                        </div>

                        <div class="blog-sidebar-banner mt-30">
                            <a href="#">
                                <img src="assets\images\product\banner.jpg" alt="">
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
<br>



    <!--====== Blog Details Ends ======-->
