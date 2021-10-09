<?php
session_start();
include_once("Php/Cnx.php");
$cnx=connect();
if(!isset($_GET["newpass"])){
    echo "password is not set !";
}else {
    try {
        $newvar = $_GET['newpass'];
        $id=$_SESSION['id'];
        $req="UPDATE user SET password ='.$newvar.' WHERE id ='.$id.' ; ";
        /* $stmt= $cnx->prepare($req);
        $stmt->bindparam(':newpass',$_GET['newpass']);
        $stmt->execute(); */
        $cnx->exec($req) ;

        header("Location: http://localhost:10083/cars/index.php");

    }catch (PDOException $e){
        echo $e->getMessage();
    }
}
?>