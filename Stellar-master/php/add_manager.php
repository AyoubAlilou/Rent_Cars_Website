<?php
include_once("../../Php/Cnx.php");
$cnx=connect();
//echo"<h1>$cnx</h1>";
if($cnx){
    $req="insert into user(name,last_name,adress,email,role,password,dateOfBirth) values(:name,:last_name,:address,:email,:role,:password,:dateOfBirth)";
    $stat=$cnx->prepare($req);
    if($stat){
        $stat->bindValue(":name",$_POST['f-name']);
        $stat->bindValue(":last_name",$_POST['l-name']);
        $stat->bindValue(":address",$_POST['address']);
        $stat->bindValue(":email",$_POST['email']);
        $stat->bindValue(":role",'Manager');
        $stat->bindValue(":password",$_POST['pass']) ;
        $stat->bindValue(":dateOfBirth",$_POST['dateofbirth']);
        $stat->execute();
        header("Location:http://localhost:10083/cars/Stellar-master/php/successful/successful.html");

        // return true ;
    }
}
?>
