<!-- Core scripts -->
<script src="<?= base_url(); ?>assets/js/pace.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/popper/popper.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
<script src="<?= base_url(); ?>assets/js/sidenav.js"></script>
<script src="<?= base_url(); ?>assets/js/layout-helpers.js"></script>
<script src="<?= base_url(); ?>assets/js/material-ripple.js"></script>
<script src="<?= base_url(); ?>assets/libs/toastr/toastr.js"></script>

<!-- Libs -->
<script src="<?= base_url(); ?>assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= base_url(); ?>assets/js/demo.js"></script>


<?php
for ($i = 0; $i < count($scripts); $i++) {
    echo $scripts[$i];
}
?>

</body>

</html>