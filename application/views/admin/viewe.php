<!-- [ Layout content ] Start -->
<div class="layout-content">

<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
	<h4 class="font-weight-bold py-3 mb-0">Read Mail</h4>
	<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
			<li class="breadcrumb-item">Email</li>
			<li class="breadcrumb-item active">Read Mail</li>
		</ol>
	</div>

	<div class="row">


		<div class="col">
			<div class="card">

				<!-- Header -->
				<div class="media p-4">
					<!-- Sender photo -->
					
					<div class="media-body pl-3">
						<!-- Sender & date -->
						<div class="mb-1">
							<?=$email['name_email']?> &lt;
							<a href="javascrip:void(0)"><?=$email['email']?></a>&gt;
							<span class="text-muted ml-2"><?=$email['date_email']?></span>
						</div>

						<!-- Subject -->
						
					</div>
				</div>
				<hr class="border-light m-0">
				<!-- / Header -->

				<hr class="border-light m-0">
				<!-- / Controls -->

				<!-- Message content -->
				<div class="p-4">
				<h5 class="line-height-inherit m-0"><?=$email['subject_email']?></h5>
				<hr class="border-light m-0"><br>
				<?=$email['coment_email']?>

				</div>
				
				<!-- / Message content -->


			</div>
		</div>

	</div>

</div>
<!-- [ content ] End -->



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
<script src="<?= base_url(); ?>assets\js\pace.js"></script>
<script src="<?= base_url(); ?>assets\js\jquery-3.3.1.min.js"></script>
<script src="<?= base_url(); ?>assets\libs\popper\popper.js"></script>
<script src="<?= base_url(); ?>assets\js\bootstrap.js"></script>
<script src="<?= base_url(); ?>assets\js\sidenav.js"></script>
<script src="<?= base_url(); ?>assets\js\layout-helpers.js"></script>
<script src="<?= base_url(); ?>assets\js\material-ripple.js"></script>

<!-- Libs -->
<script src="<?= base_url(); ?>assets\libs\perfect-scrollbar\perfect-scrollbar.js"></script>

<!-- Demo -->
<script src="<?= base_url(); ?>assets\js\demo.js"></script><script src="assets\js\analytics.js"></script>
<script src="<?= base_url(); ?>assets\js\pages\pages_messages.js"></script>
</body>

</html>
