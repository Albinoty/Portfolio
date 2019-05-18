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
            <?php
                session_start();  
                if(empty($_SESSION['authentifie'])){
                    echo "<script>";
                    echo "alert('Veuillez vous connecter !');";
                    echo 'window.location.href="./login.php";';
                    echo "</script>";
                    die();
                }
                include("./db/connexion.php");

                $query="select * from messages";
                $flag=$dbh->query($query);
            ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>E-mail</th>
                        <th>N°Téléphone</th>
                        <th>Messages</th>
                    </tr>
                </thead>
                <tbody class="vert">
                    <?php
                        include("./db/connexion.php");

                        $query="select * from messages";
                        $flag=$dbh->query($query);

                        while($row = $flag->fetch(PDO::FETCH_ASSOC)){
                            echo "<tr>";
                                echo "<td>".$row['id_message']."</td>";
                                echo "<td>".$row['nom_message']."</td>";
                                echo "<td>".$row['prenom_message']."</td>";
                                echo "<td>".$row['email_message']."</td>";
                                echo "<td>".$row['tel_message']."</td>";
                                echo "<td>".$row['texte_message']."</td>";
                            }
                            echo "</tr>";
                    ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="./db/logout.php" class="btn btn-primary">Log out</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>