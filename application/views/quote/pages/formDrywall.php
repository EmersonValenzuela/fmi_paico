                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <h4 class="font-weight-bold py-3 mb-0">Drywall</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item">Drywall</li>
                                <li class="breadcrumb-item active">Formulario</li>
                            </ol>
                        </div>

                        <hr class="border-light container-m--x mt-0 mb-5">

                        <div class="card mb-4 bg-dark text-white">
                            <h4 class="card-header">Datos Personales</h4>
                            <form id="dw_form">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label">Ingrese nombres y apellidos</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white"><i class="ion ion-md-person"></i></span>
                                                <input type="text" class="form-control form-control-inverted" placeholder="Nombres y Apellidos" id="name_user" required>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label">Ingrese correo electronico</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white"><i class="ion ion-ios-mail"></i></span>
                                                <input type="text" class="form-control form-control-inverted" placeholder="Correo electronico" id="email_user" required>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-3">
                                            <label class="form-label" for="">Ingrese número de celular</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white"><i class="ion ion-logo-whatsapp"></i></span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="Número de celular" id="num_user" required>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-header">Datos de materiales</h4>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label class="form-label">Ingrese metros lineales</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white"><i class="fas fa-ruler-horizontal"></i></span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="00.00" id="line_meters" required>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label class="form-label">Ingrese precio de plancha</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white">S/. </span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="00.00" id="iron_prc">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 col-sm-3">
                                            <label class="form-label" for="">Ingrese precio de rieles</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white">S/. </span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="00.00" id="rails_prc">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 col-sm-3">
                                            <label class="form-label" for="">Ingrese precio parantes</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white">S/. </span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="00.00" id="studs_prc">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label" for="">Ingrese precio de tornillos para lata(Millar)</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white">S/. </span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="0.00" id="tin_screw_prc">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label" for="">Ingrese precio de tornillos para drywall(Millar)</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white">S/. </span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="0.00" id="drw_screw_prc">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label" for="">Ingrese precio de masilla(Balde)</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white">S/. </span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="0.00" id="putty_prc_bucket">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label" for="">Ingrese cantidad de masilla(Balde)</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white"><i class="fas fa-sort-amount-up"></i></span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="0.00" id="amount_putty_bucket">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label" for="">Ingrese precio de masilla(Caja)</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white">S/. </span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="0.00" id="putty_price_box">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label" for="">Ingrese cantidad de masilla(Caja)</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white"><i class="fas fa-sort-amount-up"></i></span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="0.00" id="amount_putty_box">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label" for="">Ingrese precio equineros (3 mts)</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white">S/. </span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="0.00" id="equine_prc">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label" for="">Ingrese cantidad equineros (3 mts)</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white"><i class="fas fa-sort-amount-up"></i></span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="0.00" id="equine_quantity">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label" for="">Ingrese precio de cinta adhesiva para drywal</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white">S/. </span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="0.00" id="adhesive_prc">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label" for="">Ingrese cantidad cinta adhesiva para drywall</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white"><i class="fas fa-sort-amount-up"></i></span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="0.00" id="amount_adhesive">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label class="form-label" for="">Ingrese precio por metro cuadrado</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white">S/.</span>
                                                <input type="text" class="form-control form-control-inverted input_number" placeholder="0.00" id="square_meter">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row progress_btn">
                                        <div class="form-group col-md-12 col-sm-12 text-right">
                                            <button type="button" class="btn-md btn-success ladda-button text-dark" data-style="zoom-in" id="btn_send">
                                                <span class="ion ion-ios-save"></span>&nbsp;&nbsp;Generar Cotización
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div>


                    </div>
                    <!-- [ content ] End -->

                </div>
                <!-- [ Layout content ] Start -->
                </div>
                <!-- Overlay -->
                <div class="layout-overlay layout-sidenav-toggle"></div>
                </div>
                <!-- [ Layout wrapper] End -->