    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(assets/images/page-banner.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Blog</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Blog Start ======-->

    <section class="blog-page">
        <div class="container">
            <div class="row">
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
    </section>

    <!--====== Blog Ends ======-->
