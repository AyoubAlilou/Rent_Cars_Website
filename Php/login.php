<?php
session_unset();
session_start();
include_once("Cnx.php");
$cnx=connect();
$req=$cnx->query("select * from user where email='".$_POST['email']."' and password='". $_POST['pass']."';");
$user=$req->fetch();
if($user == null){
   header("Location:http://localhost:10083/cars/error-404.html");
}
else{
    $_SESSION["id"] = $user['id'];
    $_SESSION["name"] = $user['name'];
    $_SESSION["email"]=$user['email'];
    $_SESSION["role"]=$user['role'];
   if($user['role']=='admin'){
     //  print("admin");
       header("Location:http://localhost:10083/cars/Stellar-master/HomeAdmin.php");
       exit;
   }
   if($user['role']=='Manager'){
       header("Location:http://localhost:10083/cars/Stellar-master/HomeAdmin.php");
   }
   else{
       header("Location:http://localhost:10083/cars/index.php");
   }

}
