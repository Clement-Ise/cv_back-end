<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';
    require_once '../../classes/class.Personne.php';

    // Requete en POST et en GET
    if(isset($_POST["id"])){            
        $_GET["id"] = $_POST["id"]; 
    }else{ 
        if(isset($_GET["id"])){   
            $_POST["id"] = $_GET["id"];}
    }
    // Si le paramètre id existe
    if(isset($_POST["id"]) ){    
        $sql = "SELECT * FROM personne WHERE ID_PERSONNE = ?";
        //Préparation de la requete
        $requete = $pdo->prepare($sql);
        // Paramètre : id de la personne
        $requete->bindValue(1, $_POST['id']);
         // create a personne of null
        $personne = null;
        //Condition si la requete renvoi quelque chose
        if($requete->execute()) {
            // Alors parcourirs les résultats de la requete
            if($donnees = $requete->fetch()){
                // Créer un nouvel objet personne
                $personne = new Personne(
                    $donnees['ID_PERSONNE'],
                    $donnees['nom'],
                    $donnees['prenom'],
                    $donnees['departement'],
                    $donnees['cp'],
                    $donnees['ville'],
                    $donnees['adresse'],
                    $donnees['mail'],
                    $donnees['telephone'],
                    $donnees['permis'],
                    $donnees['voiture'],
                    $donnees['qualification'],
                );
            };
        };
        echo json_encode($personne);
    }else{
    // Si pas de id erreur, on retourne -1
    echo -1;
    }
?>
