               <!-- [ Layout content ] Start -->
			   <div class="layout-content">

<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
	<h4 class="font-weight-bold py-3 mb-0">Inbox</h4>
	<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
			<li class="breadcrumb-item">Email</li>
			<li class="breadcrumb-item active">Inbox</li>
		</ol>
	</div>

	<div class="row">


		<div class="col">

			<!-- Messages list -->
			<div class="card">

				<!-- Header -->
				<h4 class="card-header media flex-wrap align-items-center py-4">
					<span class="media-body"><i class="ion ion-ios-filing"></i> &nbsp; Correos</span>
					
					<span class="clearfix"></span>
				</h4>
				<!-- / Header -->


				<hr class="border-light m-0">
				<!-- / Controls -->
				<ul class="list-group messages-list">
				<?php
					foreach ($emails as $email) {
				?>
					<li class="list-group-item px-4">
					<?php
						if($email['estado_email'] == "1"){
					?>
						<a href="<?= base_url(); ?>emails/view?id=<?=$email['id_email']?>" class="message-sender flex-shrink-1 d-block text-dark">
							<span class="badge badge-dot badge-danger mr-1"></span> <?=$email['name_email']?>
						</a>
						<a href="<?= base_url(); ?>emails/view?id=<?=$email['id_email']?>" class="message-subject flex-shrink-1 d-block text-dark font-weight-bold"><?=$email['subject_email']?></a>
						<div class="message-date text-muted"><?=date('d/m/Y H:i:s', strtotime($email['date_email']))?></div>
						<?php
							}else{
						?>
							<a href="<?= base_url(); ?>emails/view?id=<?=$email['id_email']?>" class="message-sender flex-shrink-1 d-block text-dark">
							<span class="badge badge-dot badge-success mr-1"></span> <?=$email['name_email']?>
						</a>
						<a href="<?= base_url(); ?>emails/view?id=<?=$email['id_email']?>" class="message-subject flex-shrink-1 d-block text-dark"><?=$email['subject_email']?></a>
						<div class="message-date text-muted"><?=date('d/m/Y H:i:s', strtotime($email['date_email']))?></div>
						<?php
							}
						?>
						
					</li>
					<?php
						}
					?>
				</ul>
			</div>
			<!-- / Messages list -->

		</div>
	</div>

</div>
<!-- [ content ] End -->

<!-- [ Layout footer ] Start -->

<!-- [ Layout footer ] End -->

</div>
<!-- [ Layout content ] Start -->

</div>
<!-- [ Layout container ] End -->

</div>

<!-- Overlay -->
<div class="layout-overlay layout-sidenav-toggle"></div>
</div>
<!-- [ Layout wrapper ] end -->

<!-- Core scripts -->
<script src="assets\js\pace.js"></script>
<script src="assets\js\jquery-3.3.1.min.js"></script>
<script src="assets\libs\popper\popper.js"></script>
<script src="assets\js\bootstrap.js"></script>
<script src="assets\js\sidenav.js"></script>
<script src="assets\js\layout-helpers.js"></script>
<script src="assets\js\material-ripple.js"></script>

<!-- Libs -->
<script src="assets\libs\perfect-scrollbar\perfect-scrollbar.js"></script>

<!-- Demo -->
<script src="assets\js\demo.js"></script><script src="assets\js\analytics.js"></script>
<script src="assets\js\pages\pages_messages.js"></script>
</body>

</html>
