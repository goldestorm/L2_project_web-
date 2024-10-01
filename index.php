<!-- site web permetant didentifier les diferents types de manga Dorian Blondel Oudot  06/03/2024-->

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
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
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
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="../index.php">Homepage</a></li>
                                <li><a href="./recapitulatif/recapitulatif.php">recapitulatif</a></li>
                                <?php
                                if(!isset($_SESSION['login']) ){ //A COMPLETER pour tester aussi le rôle...
                                echo("<li><a href='./inscription/connexion_inscrition.php'>inscription</a></li>  
                                <li ><a href='./connexion/session.php'>connexion</a></li> }");}else {
                                    echo("<li ><a href='./connexion/admin_sujets.php'>Admin Sujet</a></li><li ><a href='./connexion/admin_accueil.php'>Admin Acceuil</a></li><li><form action='./connexion/deconnexion.php' method='POST'><button type='submit' class='btn btn-danger'>deconnexion</button></form></li>");
                                }
                                ?>                   
                            </ul>
                        </nav>
                    </div>
                </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <div class="popular__product">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="section-title" style="margin-left: 50px; margin-right: 50px;">
                        <h4 style="color:white;">Actualités</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="btn__all">
                        <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
            <div style="display:flex;margin-left: 50px; margin-right: 50px;">
                <div class="row">  <!-- sujet affichage -->
                    <div class="services-box-container service" style="margin-left:20px;">
                        <div class="services-box-item services-box-left ">
                            <div class="services-box-icon services-box-medium-icon services-box-left-icon appear-animation bounceInLeft appear-animation-visible" data-appear-animation="bounceInLeft">
                                <i class="bi bi-archive-fill"> </i>
                            </div>
                            <div class="services-box-infos">
                                <h3 class="services-box-title" style="color:white;"> 
                                    <?php $requete = "SELECT count(*) As nbsuj FROM t_sujet_suj ";
                                        $sujet = $mysqli->query($requete);
                                            if ($sujet == false) {
                                                echo "Error: La requête a echoué \n";
                                                echo "Errno: " . $mysqli->errno . "\n";
                                                echo "Error: " . $mysqli->error . "\n";
                                                exit();
                                            }
                                            $requete = $sujet->fetch_assoc();
                                            $nb_sujet = $requete['nbsuj'];
                                            echo($nb_sujet);
                                    ?> 
                                </h3>
                                <p style="color:white;">sujet</p>
                            </div>
                        </div>  
                    </div>
                </div>
                    <div class="col-md-3" style="margin-left:20px;"><!-- fiche affichage -->
                        <div class="services-box-container service">
                            <div class="services-box-item services-box-left ">
                                <div class="services-box-icon services-box-medium-icon services-box-left-icon appear-animation bounceInLeft appear-animation-visible" data-appear-animation="bounceInLeft">
                                    <i class="bi bi-file-earmark-medical-fill"> </i>
                                </div>
                                    <div class="services-box-infos">
                                        <h3 class="services-box-title" style="color:white;"> 
                                                <?php $requete = "SELECT count(*) As nbfic FROM t_fiche_fic WHERE fic_etat ='L' ";
                                                $fiche = $mysqli->query($requete);
                                                if ($fiche == false) {
                                                    echo "Error: La requête a echoué \n";
                                                    echo "Errno: " . $mysqli->errno . "\n";
                                                    echo "Error: " . $mysqli->error . "\n";
                                                    exit();
                                                }
                                                $requete = $fiche->fetch_assoc();
                                                $nb_fiche = $requete['nbfic'];
                                                echo($nb_fiche);
                                                ?> 
                                        </h3>
                                        <p style="color:white;">fiche</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row" style="margin-left: 50px; margin-right: 50px;">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                            </div>
                            <?php
                                $query = "SELECT * FROM t_actualite_act ORDER by act_id DESC LIMIT 10";
                                if ($result = $mysqli->query($query)) {/* Détermine le nombre de lignes du jeu de résultats */
                                    $row_cnt = $result->num_rows;
                                    printf("Le jeu de résultats a %d lignes.\n", $row_cnt);
                                    if ( $result->num_rows >= 1){
                                        echo("<table class='table' style='color: white;'><tr><th>titre</th><th>contenu</th><th>pseudo</th><th>Date publication</th></tr>");
                                        /* Récupère un tableau associatif */
                                        while ($actu = $result->fetch_assoc()) {
                                            echo("<tr>");
                                            echo("<td>" . $actu['act_titre'] . "</td>");
                                            echo("<td>" . $actu['act_texte'] . "</td>");
                                            echo("<td>" . $actu['cpt_pseudo'] . "</td>");
                                            echo("<td>" . $actu['act_date_publication'] . "</td>");
                                            echo("</tr>");
                                        }
                                    echo("</table>");
                                    echo("<br/>");}
                                    else {
                                    printf("Pas de données\n");
                                    }
                                /* Libération des résultats */
                            $result->free();}
                            ?>
                        </div>
                    </div>
                </div>
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/trend-1.jpg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/trend-2.jpg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/trend-3.jpg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Shingeki no Kyojin Season 3 Part 2</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/trend-4.jpg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Fullmetal Alchemist: Brotherhood</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/trend-5.jpg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Shiratorizawa Gakuen Koukou</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/trend-6.jpg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Views</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="img/sidebar/tv-1.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Boruto: Naruto next generations</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                            data-setbg="img/sidebar/tv-2.jpg">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years"
                        data-setbg="img/sidebar/tv-3.jpg">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix years month"
                    data-setbg="img/sidebar/tv-4.jpg">
                    <div class="ep">18 / ?</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix day"
                data-setbg="img/sidebar/tv-5.jpg">
                <div class="ep">18 / ?</div>
                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                <h5><a href="#">Fate stay night unlimited blade works</a></h5>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->
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
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>
<?php
$mysqli -> close();
?>
</html>