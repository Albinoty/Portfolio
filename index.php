<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Portfolio Web Developer - by Albinot Fetahi">
    <meta name="author" content="Albinot Fetahi">
    <!-- Main Css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Animate.Css -->
    <link rel="stylesheet" href="./node_modules/animate.css/animate.css">
    <title>Albinoty Portfolio</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light barNav">
            <a href="#intro" class="logo"><img src="./assets/img/logo/logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navBar">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a class="nav-link link-scroll" href="#about">About</a>
                    </li>
                    <li class="navnar-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="navnar-item">
                        <a class="nav-link" href="#work">Work</a>
                    </li>
                    <li class="navnar-item">
                        <a class="nav-link" href="#formulaire">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Intro -->
    <section class="introSite" id="intro">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg">
                    <img src="./assets/img/albinoty.png" class="img-fluid mt-5 pt-5" alt="">
                    <h1>Welcome to my Portfolio.</h1>
                    <p class="pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum accusamus aliquid delectus qui voluptates omnis porro recusandae reiciendis. Fuga, sequi!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->
    <section id="about">
        <div class="container">
            <h2>About Me</h2>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <p>Nesciunt obcaecati vitae deserunt corporis, voluptate accusantium illo maxime placeat saepe odit ex excepturi eum nihil ratione sunt magnam minima.</p>
                </div>
                <div class="col-lg-6">
                    <div class="progress-title pt-3 pb-3">HTML, CSS</div>
                    <div class="progress" style="height:25px;">
                        <div class="progress-bar text-right pr-3" role="progressbar" style="width:80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="">80%</span>
                    <div class="progress-title pt-3 pb-3">Javascript</div>
                    <div class="progress" style="height:25px;">
                        <div class="progress-bar text-right pr-3" role="progressbar" style="width:60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>60%</span>
                    <div class="progress-title pt-3 pb-3">PHP, MYSQL</div>
                    <div class="progress" style="height:25px;">
                        <div class="progress-bar text-right pr-3" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>70%</span>
                    <div class="progress-title pt-3 pb-3">Photoshop, Illustrator</div>
                    <div class="progress" style="height:25px;">
                        <div class="progress-bar text-right pr-3" role="progressbar" style="width:75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>75%</span>
                </div>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col-lg">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/image1.png" class="d-block w-100" alt="image1">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/image2.png" class="d-block w-100" alt="image2">   
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- Service -->
    <section id="service">
        <div class="container pb-5">
            <h2>Services</h2>
            <div class="row pt-5">
                <div class="col-lg-4">
                    <div class="text-center mt-5 mb-5"><img src="./assets/img/logo/html.png" alt=""></div>
                    <h3 class="text-center">Website</h3>
                    <p>Lorem ipsum, dolor sit amet coxnsectetur adipisicing elit. Iure ullam consequatur reprehenderit recusandae at natus sint fugiat odit? Unde, repellat.</p>
                </div>
                <div class="col-lg-4 ">
                    <div class="text-center mt-5 mb-5"><img src="./assets/img/logo/tools.png" alt=""></div>
                    <h3 class="text-center">Hardware Repair</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ab iusto sunt atque enim aspernatur perspiciatis modi doloremque qui at?</p>
                </div>
                <div class="col-lg-4">
                    <div class="text-center mt-5 mb-5"><img src="./assets/img/logo/adobe.png" alt=""></div>
                    <h3 class="text-center">Logo Creation</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quidem iste placeat error, sit neque! Quae aliquid eligendi dicta eum.</p>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <!-- Work -->
    <section id="work">
        <div class="container pb-5">
            <h2>Recent Work</h2>
            <div class="row pt-5">
                <div class="col-lg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ex provident est assumenda consequatur molestias ducimus eos a corrupti nulla.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="./assets/img/image1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4">
                    <img src="./assets/img/image2.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4">
                    <img src="./assets/img/intro.png" class="img-fluid" alt="">
                </div>       
            </div>
        </div>
    </section>
    <!-- Formulaire -->
    <section id="formulaire">
        <div class="container pb-5">
            <h2>Contact Me</h2>
                <?php
                    
                    $notif="";
    
                    echo "<p>".$notif."</p>";

                ?>
            <form action="./assets/php/formulaire.php" method="post" id="form" class="col-lg mt-5">
                <div class="form-group row">
                    <div class="col-md-6 pt-3">
                        <input type="text" name="prenom" placeholder="Your firstname *" class="form-control">
                    </div>
                    <div class="col-md-6 pt-3">
                        <input type="text" name="nom" placeholder="Your lastname *" class="form-control">
                    </div>
                    <div class="col-md-6 pt-3">
                        <input type="email" name="mail" placeholder="Your email" class="form-control">
                    </div>
                    <div class="col-md-6 pt-3">
                        <input type="text" name="phone" placeholder="Your phone" class="form-control">
                    </div>
                    <div class="col-md-12 pt-3">
                        <textarea name="message" placeholder="Message for me *" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 pt-3 text-center">
                        <input type="submit" name="submit" form="form" class="btn alert-primary" value="Send your Messages">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-xl-6">
                    <p class="social text-center">
                        <a href="https://facebook.com" class="fb p-2"><i class="fab fa-facebook"></i></a>
                        <a href="https://instagram.com" class="insta p-2"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com" class="twitter p-2"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.snapchat.com/l/fr-fr/" class="snap p-2"><i class="fab fa-snapchat-ghost"></i></a>
                    </p>
                </div>
                <div class="col-xl-6">
                    <p class="copy text-center">&copy; 2019 Albinoty Copyright. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Jquery -->
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <!-- Bootstrap Script -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!-- My Script Js -->
    <script src="./assets/js/main.js"></script>
</body>
</html>