<?php
session_start();

if (isset($_POST['submit'])) {
    include_once("../../Php/Cnx.php");
    $cnx = connect();

    $name = $_FILES['file']['name'];
    $target_dir = "photos/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

// Select file type
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
//$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
//if( in_array($imageFileType,$extensions_arr) ){
    // Upload file
    if ($_POST['boite'] == 'Auto') {
        $boite = true;
    } else {
        $boite = false;
    }
    $query = "insert into cars(marque,model,prix,km,boite,description,note,image) values('" . $_POST['marque'] . "','" . $_POST['model'] . "','" . $_POST['prix'] . "','" . $_POST['km'] . "','" . $boite . "','" . $_POST['desc'] . "',0,'" . $name . "');";

      $cnx->exec($query);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {

        echo "valide";
        header("Location:http://localhost:10083/cars/Stellar-master/php/successful/successful.html");
    } else {
        echo"invalide";
    }

}

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
<div class="container-scroller" >
    <!-- partial:partials/_navbar.html -->
    <?php require ("navbar.php"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper"  >
        <!-- partial:partials/_sidebar.html -->
        <?php require("sidebar.php"); ?>
        <!-- partial -->

        <!-- main-panel ends -->
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Car to the list</h4>
                    <form class="forms-sample" action="add-car.php" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label">Car type</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="marque" placeholder="type">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="model" class="col-sm-3 col-form-label">Model</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="model" placeholder="model">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prix" class="col-sm-3 col-form-label">price per day</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="prix" placeholder="prix">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="km" class="col-sm-3 col-form-label">Kilometrage</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="km" placeholder="km">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="boite" class="col-sm-3 col-form-label">Transmission </br>(boite vitesse)</label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="boite" id="optionsRadios1" value="Auto"> Auto </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="boite" id="optionsRadios1" value="Manual"> Manual </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desc" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="desc" placeholder="desc"></textarea>
                            </div>
                        </div>
                        <div class="custom-file">
                            <input type="file" name='file' class="custom-file-input" id="customFile"  accept=".jpg, .jpeg, .png">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                                <br/> <br/>



                        <input type="submit" name="submit" style="background-color:  #D2BF37; color: white" class="btn  mr-2" value="Add car"/>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
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
