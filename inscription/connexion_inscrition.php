<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/plyr.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
<?php
                                $mysqli = new mysqli('localhost','---','---','---');
                                if ($mysqli->connect_errno){// Affichage d'un message d'erreur
                                    echo "Error: Problème de connexion à la BDD \n";
                                    echo "Errno: " . $mysqli->connect_errno . "\n";
                                    echo "Error: " . $mysqli->connect_error . "\n";// Arrêt du chargement de la page
                                    exit();
                                }// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
                                if (!$mysqli->set_charset("utf8")) {
                                    printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
                                    exit();
                                }
                                //echo ("Connexion BDD réussie !")
    ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="../index.php">
                            <img src="../img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="../index.php">Homepage</a></li>
                                <li ><a href="../recapitulatif/recapitulatif.php">recapitulatif</a></li>
                                <li class="active"> <a href="../inscription/connexion_inscrition.php">inscription</a></li>
                                <li ><a href="../connexion/session.php">connexion</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
        </div>
    </header>
<div style="justify-content: center;">
    <form action="phpactions.php" method="post">
    <fieldset>
    <legend style="color:white;">Données personnelles :</legend>
    <p style="color:white;">Prenom :
    <input type="text" name="prenom" placeholder="prenom"maxlength="50"  />
    </p>
    <p style="color:white;">nom :
    <input type="text" name="nom" placeholder="nom"maxlength="80"  />
    </p>
    <p style="color:white;">email :
    <input type="email" name="email" placeholder="email" maxlength="50" />
    </p>
    <p style="color:white;">Mot de passe : <input type="password" name="mdp" maxlength="32" /></p>
    <p style="color:white;">confirmation Mot de passe : <input type="password" name="mdp2" maxlength="32"/></p>
    </fieldset>
    <p><input type="submit" value="Valider"></p>

    </form>
</div>    

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./index.html">Homepage</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/player.js"></script>
<script src="../js/jquery.nice-select.min.js"></script>
<script src="../js/mixitup.min.js"></script>
<script src="../js/jquery.slicknav.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/main.js"></script>

</body>
<?php
$mysqli -> close();
?>

</html>