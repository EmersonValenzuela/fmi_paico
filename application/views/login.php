<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url(assets/images/page-banner.jpg);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Iniciar Sesion</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Login Start ======-->

<?php
if ($error != "") {
?>
    <div class="container">
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;</button>
            <strong>Error de Acceso.</strong> <?= $error ?>, por favor verifique los datos e intente de nuevo.
        </div>
    </div>
<?php
}
?>

<section class="login-register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="login-register-content">
                    <h4 class="title">Ingrese a su cuenta</h4>

                    <div class="login-register-form">
                        <form method="post" action="<?= base_url() ?>login">
                            <div class="single-form">
                                <label>Usuario</label>
                                <input type="text" name="email">
                            </div>
                            <div class="single-form">
                                <label>Contraseña</label>
                                <input type="password" name="password">
                            </div>
                            <div class="single-form">
                                <button class="main-btn btn-block">Ingresar</button>
                            </div>
                            <div class="single-form d-flex justify-content-between">
                                <div class="checkbox">
                                    <input type="checkbox" id="remember">
                                    <label for="remember"><span></span>Recordar Contraseña</label>
                                </div>
                                <div class="forget">
                                    <a href="#">Olvidaste tu contraseña</a>
                                </div>
                            </div>
                            <div class="single-form">
                                <label>No tienes una cuenta?</label>
                                <a href="<?= base_url(); ?>register" class="main-btn main-btn-2 btn-block">Registrate</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Login Ends ======-->

<!--====== Newsletter Start ======-->

<section style="width:100%; height:30px">

</section>

<!--====== Newsletter Ends ======-->