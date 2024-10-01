<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
<?php
    $id=htmlspecialchars(addslashes($_POST['email']));
    $prenom=htmlspecialchars(addslashes($_POST['prenom']));
    $nom=htmlspecialchars(addslashes($_POST['nom']));
    $mdp=htmlspecialchars($_POST['mdp']);
    $mdp2=htmlspecialchars($_POST['mdp2']);
    if (!$mysqli->set_charset("utf8")) {
        printf("Probleme de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
        exit();
    }
    if(empty($prenom)|| empty($nom)|| empty($id) || empty($mdp)){
        echo "des données sont vide";
        exit();
    }
    if($mdp!=$mdp2){
        echo "mot de passe different";
        exit();
    }
    if(strlen($mdp)<=7){
        echo "mot de passe trop court";
        exit();
    }elseif (strlen($mdp)>=32) {
        echo "mot de passe trop long";
        exit();
    }
    $sqlt ="SELECT * FROM t_compte_cpt WHERE cpt_pseudo = '".$id."';";
    if (!$restest=$mysqli->query($sqlt)) 
    {
        echo("erreur sujet");
        exit();
    }else {
        $x = $restest->num_rows;
        if ($x != 0) {
            echo "pseudo existant";
            exit();
        }
    }

    $sql="INSERT INTO t_compte_cpt VALUES('" .$id. "','" .MD5($mdp). "');";
    $sql2="INSERT INTO t_profil_pfl VALUES('".$nom."','".$prenom."','M','D',CURDATE(),'" .$id. "');";
    $result3 = $mysqli->query($sql);
    $result4 = $mysqli->query($sql2);
    if ($result3 == false) //Erreur lors de l’exécution de la requête
    {
        // La requête a echoué
        echo "Error: La requête a échoué \n";
        echo "Query: " . $sql . "\n";
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        exit;
        if ($result4 == false) //Erreur lors de l’exécution de la requête
        {
            // La requête a echoué
            echo "Error: La requête a échoué \n";
            echo "Query: " . $sql . "\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            exit;
            
        }else //Requête réussie
        {
            echo "<br />";
            echo "Inscription réussie !" . "\n";
            echo "<br /><a href=\"../index.php\">page d'accueil</a>";
        }
    }else //Requête réussie
    {
        echo "<br />";
        echo "Inscription réussie !" . "\n";
        echo "<br /><a href=\"../index.php\">page d'accueil</a>";
    } 

?>
<?php
$mysqli -> close();
?>
</body>
</html>