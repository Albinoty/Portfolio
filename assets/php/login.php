<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <meta name="description" content="Portfolio Web Developer - by Albinot Fetahi">
    <meta name="author" content="Albinot Fetahi">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.css">
    <!-- Animate.Css -->
    <link rel="stylesheet" href="../../node_modules/animate.css/animate.css">
    <title>Connexion Albinoty</title>
</head>
<body id="yolo">
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light barNav">
            <a href="../../index.php#intro" class="logo"><img src="../img/logo/logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navBar">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a class="nav-link link-scroll" href="../../index.php#about">About</a>
                    </li>
                    <li class="navnar-item">
                        <a class="nav-link" href="../../index.php#service">Service</a>
                    </li>
                    <li class="navnar-item">
                        <a class="nav-link" href="../../index.php#work">Work</a>
                    </li>
                    <li class="navnar-item">
                        <a class="nav-link" href="../../index.php#formulaire">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section id="fomulaire" class="mt-6">
        <div class="container mt-6">
            <form action="./login.php" method="post" class="pt-5 pb-5 w-auto connexion">
                <div class="row">
                </div>
                <div class="row form-group  pl-2 pr-2">
                    <div class="col-sm-2 offset-sm-2">
                        <label for="user">Pseudo ou mail</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="user" id="user" class="form-control">
                    </div>
                </div>
                <div class="row form-group  pl-2 pr-2">
                    <div class="col-sm-2 offset-sm-2">
                        <label for="password">Mot de passe</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
               </div>
                <div class="col-12 text-center mt-5">
                    <input type="submit" class="btn btn-primary">
                </div>
                </div>
            </form>
        </div>
    </section>
    <?php

        function connexion($user){
            session_start();
            $_SESSION['authentifie']=true;
            $_SESSION['username']=$user;

            header("Location:./message.php");
            die();

        }

        if(!empty($_POST)){

            include("./db/connexion.php");

            $query="select username_admin,password_admin from admin";
            $flag=$dbh->query($query);

            while($row = $flag->fetch(PDO::FETCH_ASSOC)){
                
                $userCompare=$row['username_admin'];
                $passwordCompare=$row['password_admin'];

            }
    
            $user=$_POST['user'];
            $password=$_POST['password'];


            if($user==$userCompare && password_verify($password,$passwordCompare)){
                connexion($user);
            }

            else{
                echo "<script>";
                echo 'alert("Le pseudo/mail ou mot de passe, veuillez réessayer!");';
                echo "</script>";
            }
        }

    ?>
</body>
</html>