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
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php require("sidebar.php"); ?>
        <!-- partial -->

        <!-- main-panel ends -->
        <div class="card-body">
            <h4 class="card-title">Basic form elements</h4>
            <form  method="post" action="facture.php">
                <select class="form-control" name="id">

                    <?php include_once("../../Php/Cnx.php");
                    $cnx=connect();
                    $req=$cnx->query("select * from user where role ='Customer'");
                    while($c=$req->fetch()){ ?>
                        <option value="<?php echo $c['id'] ?>" ><?php echo $c['name']."   ".$c['last_name']; ?></option>
                    <?php }?>
                </select>
                <br/>
                <br/>
                <center><input type="submit" name="submit" class="btn btn-light btn-rounded btn-fw" value="valide"/></center>
            </form>

<?php

include_once("../../Php/Cnx.php");
$cnx = connect();

$montantF=0;
if(isset($_POST['submit'])){
$req = $cnx->query("select * from  user  where id=".$_POST['id']);
$c=$req->fetch();
?>

    <h4 class="card-title"><?php echo $c['name']."  ".$c['last_name'];?></h4>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Date start</th>
            <th>last Date</th>
            <th>Montant reservation</th>

        </tr>
        </thead>
        <tbody>
    <?php

$req = $cnx->query("select * from reservation r ,cars c where c.id=r.idCar and idCus=".$_POST['id']);
$montant=0;


//$txt="";
while ($c = $req->fetch()){
        $dif=abs(strtotime($c['dateEnd'])-strtotime($c['dateStart']));
    $years = floor($dif / (365*60*60*24));
    $months = floor(($dif - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($dif - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $montant=$c["prix"]*($days+$months*30);
        //$txt="Date Debut".$c["dateEnd"]."Date fin :  ".$c["dateStart"]."Montant = ".$montant;
        $montantF+=$montant;
        ?>
        <tr>
            <td><?php echo $c['dateEnd']?></td>
            <td><?php echo $c['dateStart']?></td>
            <td><?php echo $montant ?></td>
        </tr>

        <?php
 } echo "<tr> <td colspan='3' >Montant final            ".$montantF."</td></tr>";}
?>
        </tbody>
    </table>
</div>
    </div>
    <!-- page-body-wrapper ends -->
</div>
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



