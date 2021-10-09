<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php require ("php/navbar.php"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper" >
        <!-- partial:partials/_sidebar.html -->
        <?php require("php/sidebar.php"); ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
<!--                <div class="row purchace-popup">-->
<!--                    <div class="col-12 stretch-card grid-margin">-->
<!--                        <div class="card card-secondary">-->
<!--                  <span class="card-body d-lg-flex align-items-center">-->
<!--                    <p class="mb-lg-0">Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more! </p>-->
<!--                    <a href="https://www.bootstrapdash.com/product/stellar-admin/?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn btn-warning purchase-button btn-sm my-1 my-sm-0 ml-auto">Upgrade To Pro</a>-->
<!--                    <button class="close popup-dismiss ml-2">-->
<!--                      <span aria-hidden="true">&times;</span>-->
<!--                    </button>-->
<!--                  </span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body" >
                                <h4 class="card-title">Cars </h4>
                                <div class="aligner-wrapper">
                                    <canvas id="sessionsDoughnutChart" height="210"></canvas>
                                    <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                                        <h2 class="text-center mb-0 font-weight-bold">8.234</h2>
                                        <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total Leads</small>
                                    </div>
                                </div>
                                <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                                    <div class="d-flex">
                                        <span class="square-indicator bg-danger ml-2"></span>
                                        <p class="mb-0 ml-2">Assigned</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="square-indicator bg-success ml-2"></span>
                                        <p class="mb-0 ml-2">Not Assigned</p>
                                    </div>
                                    <div class="d-flex">
                                    <div class="d-flex">
                                        <span class="square-indicator bg-warning ml-2"></span>
                                        <p class="mb-0 ml-2">Reassigned</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                      <?php require("php/listuser.php");?>


            </div>
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="./vendors/chart.js/Chart.min.js"></script>
<script src="./vendors/moment/moment.min.js"></script>
<script src="./vendors/daterangepicker/daterangepicker.js"></script>
<script src="./vendors/chartist/chartist.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="./js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>