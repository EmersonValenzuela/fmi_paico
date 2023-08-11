    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(<?= base_url();?>assets/images/page-banner.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Detalles Profesor</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Teacher Details Start ======-->

    <section class="teacher-details">
        <div class="container">
            <div class="row teachers-row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-8 teachers-col">
                    <div class="single-teacher-details mt-50 text-center">
                        <div class="teacher-social">
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="teacher-image">
                                <a href="teacher-details.html">
                                <img src="<?= base_url();?>assets/img/teachers/<?=$teacher['foto']?>" alt="teacher">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 teachers-col">
                    <div class="teacher-details-content mt-45">
                        <h4 class="teacher-name"><?=$teacher['name']?></h4>
                        <span class="designation"><?=$teacher['profession']?></span><br>
                        <span class="department"><?=$teacher['designation']?></span>
                        <p><?=$teacher['concept']?></p>
                        <!--<ul class="teacher-contact">
                            <li><strong>Email:</strong> <a href="#">mailme@example.com</a></li>
                            <li><strong>Phone:</strong> <a href="#">+98745 325 698</a></li>
                            <li><strong>Skype:</strong> <a href="#">zesica.luice</a></li>
                        </ul>-->
                    </div>
                </div>
            </div>

            <div class="teacher-details-tab">
                <ul class="nav nav-justified" role="tablist">
					<li class="nav-item"><a   class="active" data-toggle="tab" href="#educational" role="tab">Educational Qualification</a></li>
                    <li class="nav-item"><a data-toggle="tab" href="#experience" role="tab">Experience</a></li>
                    
                    
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="experience" role="tabpanel">
                        <div class="row">
						<?php
								foreach($experiences as $experience){

								?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title"><?=$experience['asignation']?></h4>
                                    <p><?=$experience['place']?></p>
                                    <p><?=$experience['time']?></p>
                                </div>
							</div>
							<?php
								}
							?>
                        </div>
                    </div>
                    <div class="tab-pane fade  show active" id="educational" role="tabpanel">                        
                        <div class="row">
							<?php
								foreach($educations as $education){

								?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title"><?=$education['title']?></h4>
                                    <p><?=$education['school']?></p>
                                    <p><?=$education['time']?></p>
                                </div>
							</div>
							<?php
							} 
						?>
                        </div>
                    </div>

                </div> 
            </div>
        </div>
    </section>

	<br><br>
    <!--====== Teacher Details Ends ======-->
