<?php
    
    $nom=test_input($_POST['nom']);
    $prenom=test_input($_POST['prenom']);
    $mail=test_input($_POST['mail']);
    $tel=test_input($_POST['phone']);
    $message=test_input($_POST['message']);

    //echo $nom." ".$prenom." ".$mail." ".$tel." ".$message;


    function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include("./db/connexion.php");

    $query="INSERT INTO messages(id_message,nom_message,prenom_message,email_message,tel_message,texte_message) values('','$nom','$prenom','$mail','$tel','$message')";
    $dbh->exec($query);

    if($dbh){
        echo "<script>";
        echo 'alert("Merci pour votre message. \n A très vite!");';
        echo "window.location.href='../../index.php';";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('Il a eu un problème \n Veuillez réessayer plus tard!')";
        echo "window.location.href='../../index.php';";
        echo "</script>";
    }

?>
