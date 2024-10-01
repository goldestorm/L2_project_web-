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
                                <li><a href="../recapitulatif/recapitulatif.php">recapitulatif</a></li>
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
        if (isset($_GET['code']))
        {
            $code = $_GET['code'];
            $requete= "SELECT * FROM t_fiche_fic WHERE fic_code ='".$code."' AND fic_etat = 'L';";
            $req_fiche = $mysqli->query($requete);
            while ($fiche = $req_fiche->fetch_assoc()) {
                $requete2= "SELECT sjt_intitule FROM t_sujet_suj WHERE sjt_id = $fiche[sjt_id]";
                $req_sjt = $mysqli->query($requete2);
                $sjt = $req_sjt->fetch_assoc();
                $requete3= "SELECT * FROM t_hyperlien_hl JOIN t_lien_fic_hl USING(hl_id) JOIN t_fiche_fic USING(fic_id) WHERE fic_id = $fiche[fic_id]";
                $req_lien = $mysqli->query($requete3);
                echo "<div class='card mb-3' style='margin:20px;align-items: center;'> ";
                echo"<img src='".$fiche['fic_img']."' class='card-img-top' alt='...' style='width:25%; margin:20px;'>";
                echo"<h1 class='card-title'>".$sjt['sjt_intitule']."</h1>";
                echo"<div class='card-body'>";
                echo"<h3 class='card-title'>".$fiche['fic_label']."</h1>";
                echo"<h4 class='card-text'>".$fiche['fic_contenu']."</h4>";
                echo"</div>";
                echo "<div class='card mb-3' style='margin:20px;align-items: center;'> ";
                echo"<h1 class='card-title'>Hyperlien</h1>";
                echo"<div class='card-body'>";
                while ($lien = $req_lien->fetch_assoc()) {
                    echo"<li class='card-text'><a href='".$lien['hl_url']."'>".$lien['hl_nom']."</a></h4>";
                }
                echo"</div>";
                echo"</div>";
                echo"<br></br>";
            }
            $requete= "SELECT * FROM t_fiche_fic WHERE fic_code ='" .$code."' AND fic_etat = 'H';";
            $req_fiche = $mysqli->query($requete);
            while ($fiche = $req_fiche->fetch_assoc()) {
                echo "<div class='card mb-3' style='margin:20px; align-items: center;'>";
                echo"<div class='card-body'>";
                echo"<h1 class='card-title'>".$fiche['fic_label']."</h1>";
                echo"<h4 class='card-text'>Est hors ligne ou en maintenance merci de votre compréhention</h4>";
                echo"</div>";
                echo"</div>";
                echo"<br></br>";
            }
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