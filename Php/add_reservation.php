<?php
session_start();
if(($_SESSION['id']==null)or ($_SESSION['role']!='Customer')){
    header("Location:http://localhost:10083/cars/login.html");
}else {
include_once("Cnx.php");
$cnx=connect();
//echo"<h1>$cnx</h1>";
if($cnx){
    $req="insert into reservation(pickupLocation,dropOfLocation,dateStart,dateEnd,idCar,idCus) values(:pickL,:dropL,:dateS,:dateE,:idCar,:idCus)";
    $stat=$cnx->prepare($req);
//    if($stat){
//        $stat->bindparam(":pickL",$_POST["PickLoc"]);
//        $stat->bindparam(":dropL",$_POST["DropLoc"]);
//        $stat->bindparam(":dateS",$_POST["dateStart"]);
//        $stat->bindparam(":dateE",$_POST["dateEnd"]);
//        echo $_POST["idCar"] ."".$_SESSION["id"] ;
//        $stat->bindparam(":idCar",$_POST["idCar"]) ;
//        $stat->bindparam(":idCus",$_SESSION["id"]);
//        $stat->execute();
//        echo "Votre demande a été bien enregistrée !";
//        return true ;
//    }
    $stat->execute(array(
        'pickL' => $_POST["PickLoc"],
        'dropL' => $_POST["DropLoc"],
        'dateS' => $_POST["dateStart"],
        'dateE' => $_POST["dateEnd"],
        'idCar' => $_POST["idCar"],
        'idCus' => $_SESSION["id"]

    ));

    header("Location:http://localhost:10083/cars/car-list.php");

    echo "Votre demande a été bien enregistrée !";
}}
?>
