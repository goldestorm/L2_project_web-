<!DOCTYPE html>
<html lang="zxx">

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
    <!-- Page Preloder -->
    <!--div id="preloder">
        <div class="loader"></div>
    </div-->
    <?php
        session_start();
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
                                <li class="active"><a href="../recapitulatif/recapitulatif.php">recapitulatif</a></li>
                                <?php
                                if(!isset($_SESSION['login']) ){ //A COMPLETER pour tester aussi le rôle...
                                echo("<li><a href='../inscription/connexion_inscrition.php'>inscription</a></li>  
                                <li ><a href='../connexion/session.php'>connexion</a></li> }");}else {
                                    echo("<li ><a href='../connexion/admin_sujets.php'>Admin Sujet</a></li><li ><a href='../connexion/admin_accueil.php'>Admin Acceuil</a></li><li><form action='../connexion/deconnexion.php' method='POST'><button type='submit' class='btn btn-danger'>deconnexion</button></form></li>");
                                }
                                ?> 
                            </ul>
                        </nav>
                    </div>
                </div>
        </div>
    </header>


    
    <?php
        $requete= "SELECT * FROM t_sujet_suj;";

        $req_sujet = $mysqli->query($requete);
        while ($sujet = $req_sujet->fetch_assoc()) {
            $requete2= "SELECT * FROM t_fiche_fic WHERE sjt_id =" .$sujet['sjt_id']." AND fic_etat='L';";
            $req_fiche = $mysqli->query($requete2);
            echo" <h2 style='color:white;'>". $sujet['sjt_intitule'] ."</h2> <br></br>";
            
            echo"<div class='row row-cols-1 row-cols-md-3 g-4' style='margin:20px; pading:10px; align-items: center;'>";
            while ($fiche = $req_fiche->fetch_assoc()) {
                echo "<div class='col'>";
                echo "<a href='../recapitulatif/fiche.php?code=".$fiche['fic_code']."'>";
                echo"<div class='card' style='margin:20px; align-items: center;'>";
                echo"<img src='".$fiche['fic_img']."' class='card-img-top' alt='...' style='width:50%; style='margin:20px;'>";
                echo"<div class='card-body'>";
                echo"<h3 class='card-title'>".$fiche['fic_label']."</h3>";
                echo"</div>";
                echo"</div>";
                echo "</a>";
                echo"</div>";
            }
            echo"</div> <br></br>";
        }
    ?>
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
                    <a href="../index.html"><img src="../img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="../index.html">Homepage</a></li>
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

</html>