
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
    <div class="container-fluid page-body-wrapper" style="padding-top: 0px">
        <!-- partial:partials/_sidebar.html -->
        <?php require("sidebar.php"); ?>
        <!-- partial -->


<div class="card">
    <div class="card-body">
  <h1></h1><br>
  <h4>Update A Manager</h4>
  <p>Select a manager:</p>

   <?php
  include_once("../../Php/Cnx.php");
  $cnx=connect();
  if($cnx){
    $req = $cnx->query("select id,name from user where role='Manager'");
  echo "<select name=\"id\">";
    while ($a=$req->fetch()) {
      echo "<option>";
      echo  $a['id']. " : ". $a['name'] ;
      echo "</option>";
    }
    echo "</select>";
  }
    ?>


<br><br>
   <form class="forms-sample" action="update_manager.php" method="post">
     <div class="form-group row">
         <label for="id" class="col-sm-3 col-form-label">Id</label>
         <div class="col-sm-9">
           <!-- *   -->
           <input type="text" class="form-control" name="id" id="id" placeholder="id">
         </div>
     </div>

       <div class="form-group row">
           <label for="exampleInputUsername2" class="col-sm-3 col-form-label">New First name</label>
           <div class="col-sm-9">
             <!-- *   -->
             <input type="text" class="form-control" name="f-name" id="f-name" placeholder="First Name">
           </div>
       </div>
       <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">New Last Name</label>
           <div class="col-sm-9">
             <!-- * -->
               <input type="text" class="form-control" id="l-name" name="l-name" placeholder="Last Name">
           </div>
       </div>

       <div class="form-group row">
           <label for="exampleInputPassword2" class="col-sm-3 col-form-label">New Address</label>
           <div class="col-sm-9">
             <!-- *  -->
              <input   type="textera" class="form-control" name="address" placeholder="Address">
           </div>
       </div>

       <div class="form-group row">
           <label for="exampleInputMobile" class="col-sm-3 col-form-label">New Email</label>
           <div class="col-sm-9">
             <!-- *   -->
             <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
           </div>
       </div>

       <div class="form-group row">
           <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">New Password</label>
           <div class="col-sm-9">
               <input type="password" class="form-control" name="pass" id="pass" placeholder="Your Password" >
           </div>
       </div>
           <!-- *  -->
       <div class="form-group row">
           <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">New Birth Date </label>
           <div class="col-sm-9">
               <input type="date" class="form-control" name="dateofbirth" placeholder="Your date of birth">
           </div>
       </div>
       <button style="color: white ; background-color: #D2BF37" type="submit" class="btn  mr-2">Update </button>
       <button class="btn btn-light">Cancel</button>
   </form>
</div>
</div>
    </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
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
