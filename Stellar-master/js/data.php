<?php
header('Content-Type: application/json');
include_once ("../../Cnx.php");
$cnx=connect();
$data = array();
$r=$cnx->query("select count(*) as totale from reservation r,cars c where c.id <> r.idCar   ");
$e=$r->fetch();

$r1=$cnx->query("select count(*) as totale from reservation r,cars c where c.id= r.idCar  ");
$e1=$r1->fetch();
$data = array($e['totale'],$e1['totale']);


//now print the data
print json_encode($data);
