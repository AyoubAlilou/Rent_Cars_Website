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
    <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="shortcut icon" href="../images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php require ("navbar.php"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper" >
        <!-- partial:partials/_sidebar.html -->
        <?php require("sidebar.php"); ?>

        <!-- partial -->
        <div class="main-panel">
        <!-- main-panel ends -->
        <div class='row'>
            <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div style="text-align: right" ><button type="button" style="color: white ; background-color: #D2BF37" class="btn  " ><a  style="color: white" href="ModifManager.php"  >Update Manager </a></div>
                    <h4 class="card-title">List of Managers: </h4>
                    <!-- <p class="card-description"> Add class <code>.table-striped</code> -->
                    </p>
                    <!-- //////////////////////////////////////////////////////////////////// -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> Name </th>
                            <th> Last Name </th>
                            <th> Email </th>
                            <th> Date of birth </th>
                            <th> address </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        include_once("../../Php/Cnx.php");
                        $cnx=connect();
                        $req=$cnx->query("select * from user where role=\"Manager\" ");
                        while($user = $req->fetch()){
                            echo "
                          <tr>
                                   <td>".$user['name']."</td>
                                   <td>".$user['last_name']."</td>
                                   <td>".$user['email']."</td>
                                   <td>".$user['dateOfBirth']."</td>
                                   <td>".$user['adress']."</td>
                         </tr>";}
                        ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- page-body-wrapper ends -->

<!-- container-scroller -->
<!-- plugins:js -->
<script src="../vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../vendors/select2/select2.min.js"></script>
<script src="../vendors/typeahead.js/typeahead.bundle.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../js/off-canvas.js"></script>
<script src="../js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../js/typeahead.js"></script>
<script src="../js/select2.js"></script>
<!-- End custom js for this page -->
<!-- End custom js for this page -->
</body>
</html>


