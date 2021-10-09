<?php
include_once("../../Php/Cnx.php");
$cnx=connect();
// $id = $_GET['id'];
if($cnx){
  $sql="UPDATE user 
 SET name=:name,
  last_name=:last_name,
  adress=:adress,
  email=:email,
  password=:password,
  dateOfBirth=:dateOfBirth
  WHERE id=:id ";

  $stmt=$cnx->prepare($sql);
$stmt->bindParam(':id', $_POST['id']);
$stmt->bindParam(':name', $_POST['$f-name']);
$stmt->bindParam(':last_name', $_POST['l-name']);
$stmt->bindParam(':adress', $_POST['address']);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':password', $_POST['password']);
$stmt->bindParam(':dateOfBirth', $_POST['dateofbirth']);
$stmt->execute();
header("Location:http://localhost:10083/cars/Stellar-master/php/basic-table.php");
}
 ?>
