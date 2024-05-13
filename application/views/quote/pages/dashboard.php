 <!-- [ Layout content ] Start -->
 <div class="layout-content">

     <!-- [ content ] Start -->
     <div class="container-fluid flex-grow-1 container-p-y">
         <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
         <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                 <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                 <li class="breadcrumb-item active">Main</li>
             </ol>
         </div>
         <div class="card">
             <h6 class="card-header">Tabla de Cotizaciones</h6>
             <div class="card-datatable table-responsive">
                 <table class="datatables-demo table table-striped table-bordered" id="data-quote">
                     <thead>
                         <tr>
                             <th>Nombre Cliente</th>
                             <th>Número de Celular</th>
                             <th>Fecha de Creación</th>
                             <th>Fecha de Vencimiento</th>
                             <th>Acciones</th>
                         </tr>
                     </thead>
                     <tbody>

                     </tbody>
                 </table>
             </div>
         </div>
         <input type="hidden" value="<?= base_url() ?>" id="url_base">
     </div>

 </div>
 <!-- [ Layout content ] Start -->
 </div>
 <!-- [ Layout container ] End -->
 </div>
 <!-- Overlay -->
 <div class="layout-overlay layout-sidenav-toggle"></div>
 </div>
 <!-- [ Layout wrapper] End -->

 <div class="modal modal-top fade" id="modals-top">
     <div class="modal-dialog">
         <form class="modal-content" id="form-mail" method="post">
             <div class="modal-header">
                 <h5 class="modal-title">Correo Electronico
                     <br>
                     <small class="text-muted">Ingresa el correo electrónico al cual será enviado la cotización (Cliente)"</small>
                 </h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
             </div>
             <div class="modal-body">
                 <div class="form-row">
                     <div class="form-group col">
                         <label class="form-label">Correo Electrónico</label>
                         <input type="hidden" name="id-drw" id="id-drw" value="">
                         <input type="text" class="form-control" placeholder="client@client.com" id="client-mail" name="client-mail">
                         <div class="clearfix"></div>
                     </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 <button type="submit" class="btn btn-primary">Enviar</button>
             </div>
         </form>
     </div>
 </div>