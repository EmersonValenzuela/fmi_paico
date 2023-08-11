

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
                        <div class="row">
                            <!-- Staustic card 9 Start -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card mb-4">
                                    <div class="progress bg-white">
                                        <div class="progress-bar bg-primary" style="width:100%"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5>Blogs</h5>
                                        <div class="text-center">
                                            <span class="d-block text-primary display-3"><?=$blogs?></span>
                                            <p class="mb-0">Total</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card mb-4">
                                    <div class="progress bg-white">
                                        <div class="progress-bar bg-success" style="width:100%"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5>Comentarios</h5>
                                        <div class="text-center">
                                            <span class="d-block text-success display-3"><?=$comments?></span>
                                            <p class="mb-0">Total</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card mb-4">
                                    <div class="progress bg-white">
                                        <div class="progress-bar bg-danger" style="width:100%"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5>Usuarios</h5>
                                        <div class="text-center">
                                            <span class="d-block text-danger display-3"><?=$usuarios?></span>
                                            <p class="mb-0">Total</p>
                                        </div>
                                    </div>
                                </div>
							</div>
							<div class="col-xl-4 col-md-6">
                                <div class="card mb-4">
                                    <div class="progress bg-white">
                                        <div class="progress-bar bg-primary" style="width:100%"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5>Cursos</h5>
                                        <div class="text-center">
                                            <span class="d-block text-danger display-3"><?=$cursos?></span>
                                            <p class="mb-0">Total</p>
                                        </div>
                                    </div>
                                </div>
							</div>
							<div class="col-xl-4 col-md-6">
                                <div class="card mb-4">
                                    <div class="progress bg-white">
                                        <div class="progress-bar bg-success" style="width:100%"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5>Profesores</h5>
                                        <div class="text-center">
                                            <span class="d-block text-danger display-3"><?=$teachers?></span>
                                            <p class="mb-0">Total</p>
                                        </div>
                                    </div>
                                </div>
							</div>
							<div class="col-xl-4 col-md-6">
                                <div class="card mb-4">
                                    <div class="progress bg-white">
                                        <div class="progress-bar bg-danger" style="width:100%"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5>Emails</h5>
                                        <div class="text-center">
                                            <span class="d-block text-danger display-3"><?=$emails?></span>
                                            <p class="mb-0">Total</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Staustic card 9 end -->
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
    <script src="assets\libs\eve\eve.js"></script>
    <script src="assets\libs\flot\flot.js"></script>
    <script src="assets\libs\flot\curvedLines.js"></script>
    <script src="assets\libs\chart-am4\core.js"></script>
    <script src="assets\libs\chart-am4\charts.js"></script>
    <script src="assets\libs\chart-am4\animated.js"></script>

    <!-- Demo -->
    <script src="assets\js\demo.js"></script>
    <script src="assets\js\analytics.js"></script>
    <script>
        $(document).ready(function() {
            // checkCookie();
            $('#exampleModalCenter').modal();
        });

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookie() {
            var ticks = getCookie("modelopen");
            if (ticks != "") {
                ticks++;
                setCookie("modelopen", ticks, 1);
                if (ticks == "2" || ticks == "1" || ticks == "0") {
                    $('#exampleModalCenter').modal();
                }
            } else {
                // user = prompt("Please enter your name:", "");
                $('#exampleModalCenter').modal();
                ticks = 1;
                setCookie("modelopen", ticks, 1);
            }
        }
    </script>
    <script src="assets\js\pages\dashboards_index.js"></script>

</body>

</html>
