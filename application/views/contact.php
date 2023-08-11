

        <!-- Modal HTML -->
        
	<?php echo $msj;?>
        
    
    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(<?= base_url(); ?>assets/images/page-banner.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Contactanos</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Contact Start ======-->
    
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Dirección</h5>
                            <p>297 Central Street, New Town North City, New York, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Telefonos</h5>
                            <p><a href="tel:+62548254658">+62548 254 658</a></p>
                            <p><a href="tel:+99875587478">+99875 587 478</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="far fa-globe"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Web</h5>
                            <p><a href="mailto://info@example.com">info@example.com</a></p>
                            <p><a href="www.example.com">www.example.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-title text-center">
                            <h3 class="title">Dejanos un mensaje</h3>
                            
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form-wrapper">
                            <form action="<?= base_url(); ?>contact/sendContact" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="name" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="phone" placeholder="Número de celular">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="subject" placeholder="Asunto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea name="message" placeholder="Mensaje aqui..."></textarea>
                                        </div>
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="single-form text-center">
                                            <button class="main-btn">Enviar Mensaje</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Contact Ends ======-->
    
    <br>
