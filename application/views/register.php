
    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(assets/images/page-banner.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Registrate</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Login Start ======-->

    <section class="login-register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
				<div id="msjModal"></div>
                    <div class="login-register-content">
                        <h4 class="title">Crea tu cuenta</h4>

                        <div class="login-register-form">
                            <form action="<?= base_url(); ?>register/addUser" method="post" autocomplete="off">
                                <div class="single-form">
                                    <label>Nombres *</label>
                                    <input type="text" name="names" value="" required="required">
                                </div>
                                <div class="single-form">
                                    <label>Correo Electrónico *</label>
                                    <input type="email" name="email" value="" required="required">
								</div>
								<div class="single-form">
                                    <label>Número de Celular *</label>
                                    <input type="text" name="phone" value="" required="required">
                                </div>
                                <div class="single-form">
                                    <label>Nombre de usuario *</label>
                                    <input type="text" name="username" value="" required="required">
                                </div>
                                <div class="single-form">
                                    <label>Contraseña</label>
                                    <input type="password" name="pass" value="" required="required">
                                </div>
								<div class="single-form">
                                    <input type="hidden" name="idrol" value="2">
                                </div>
                                <div class="single-form">
                                    <button type="submit" class="main-btn btn-block">Registrate</button>
                                </div>
                                

                            </form>
							<!--<div class="single-form">
                                    <label>Ya tienes una cuenta?</label>
                                    <a href="<?= base_url(); ?>login" class="main-btn main-btn-2 btn-block">Inicia Sesión Ahora!</a>
                                </div>-->
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <!--====== Login Ends ======-->
    
    <!--====== Newsletter Start ======-->

    <section class="newsletter-area-2">
        <div class="container">
            <div class="newsletter-wrapper bg_cover" style="background-image: url(assets/images/newsletter-bg-1.jpg);">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="section-title-2 mt-25">
                            <h2 class="title">Subscribe our Newsletter</h2>
                            <span class="line"></span>
                            <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need some</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="newsletter-form mt-30">
                            <form action="#">
                                <input type="text" placeholder="Enter your email here">
                                <button class="main-btn main-btn-2">Subscribe now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

