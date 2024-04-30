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