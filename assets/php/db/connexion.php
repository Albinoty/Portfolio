<?php
    $servername="127.0.0.1";
    $user="root";
    $pass="";
 
    try{
        $dbh = new PDO ("mysql:host=$servername;dbname=portfolio",$user,$pass);
    }
    catch(PDOExeception $e){
        print "Erreur" .$e->getMessage();
        die();
    }
    
?>