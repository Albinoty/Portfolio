<?php

    $nom = $prenom = $mail = $tel = $message = "";
    
    if($_REQUEST["REQUESTED_METHOD"] == "POST"){

        $nom=test_input($_POST['nom']);
        $prenom=test_input($_POST['prenom']);
        $mail=test_input($_POST['mail']);
        $tel=test_input($_POST['phone']);
        $message=test_input($_POST['message']);

    }

    function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $user="root";
    $pass="";

    

    

/*
   


    $notification="Merci pour votre message!";

   //header("Location: /php/index.php#formulaire");

/*
if(isset($_POST['submit'])){

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $mail=$_POST['mail'];
    $tel=$_POST['phone'];
    $message=$_POST['message'];

    echo $nom." ".$prenom." ".$mail." ".$tel." ".$message;
    

    }*/

?>
