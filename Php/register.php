<?php
include_once("Cnx.php");
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
        $stat->bindValue(":role",'Customer');
        $stat->bindValue(":password",$_POST['pass-1']) ;
        $stat->bindValue(":dateOfBirth",$_POST['dateofbirth']);
        $stat->execute();
        echo "Votre demande a été bien enregistrée !";
        header("Location:http://localhost:10083/cars/login.html");
        return true ;
    }

}