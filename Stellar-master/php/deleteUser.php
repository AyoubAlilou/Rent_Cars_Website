<?php
include_once("../../Php/Cnx.php");
$cnx=connect();
if(!$_GET['id']){
    echo "<h1>erreur</h1>";
}
else{
    $bol=false;
    try {
        $id=$_GET['id'];
        $req="DELETE FROM user WHERE id =:id";
        $stmt= $cnx->prepare($req);
        $stmt->bindparam(":id",$id);
        $stmt->execute();
        //$cnx->exec($req) or die(print_r($cnx->errorInfo(), true));
        $bol=true;
        header("Location: http://localhost:10083/cars/Stellar-master/HomeAdmin.php");

    }catch (PDOException $e){
        echo $e->getMessage();
    }

}
?>