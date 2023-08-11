    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(assets/images/page-banner.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Nuestros Profesores</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Teachers Start ======-->

    <section class="teachers-page">
        <div class="container">
            <div class="row teachers-row">
				<?php foreach($teachers as $teacher){

				?>
                <div class="col-md-4 col-sm-6 teachers-col">
                    <div class="single-teacher mt-80 text-center">
                        <div class="teacher-social">
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="teacher-image">
                            <a href="<?= base_url(); ?>teachers/teacherdetails?id=<?=$teacher['id']?>">
                                <img src="assets/img/teachers/<?=$teacher['foto']?>" alt="teacher">
                            </a>
                        </div>
                        <div class="teacher-content">
                            <h4 class="name"><a href="<?= base_url(); ?>teachers/teacherdetails?id=<?=$teacher['id']?>"><?=$teacher['name']?></a></h4>
							<span class="designation"><?=$teacher['profession']?></span> <br>
							<span class="designation"><?=$teacher['designation']?></span>
                        </div>
                    </div>
				</div>
				<?php } ?>
            </div>
        </div>
    </section>
    <!--====== Newsletter Start ======-->
<br>
