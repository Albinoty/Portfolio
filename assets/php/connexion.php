<?php
    $servername="localhost";
    $user="";
    $pass="";
/*
    $dbh = new PDO("mysql:host=$servername;port=3234;dbname=portfolio",$user,$pass);
    if($dbh){echo "cest bon frere";}
    else{
        echo "nope";
    }*/
 

    try{
        
        $dbh = new PDO ('mysql:host=$servername;dbname=portfolio',$user,$password);
        echo "ok";

    }
    catch(PDOExeception $e){
        print "Erreur" .$e->getMessage();
        die();
    }
    
?>
