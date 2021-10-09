<?php

    function connect(){
        include_once("constBD.php");
        try{
        $cnx=new PDO("mysql:host=".Myhost.";dbname=".MyDb,MyUser,Mypassword);
        return $cnx;
        }
        catch (PDOException $e){
            echo"Erreur:".$e->getMessage()."<br/>";
            echo"code:".$e->getCode();
            return null;

        }
    }
