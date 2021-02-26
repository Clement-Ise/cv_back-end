<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';
    require_once '../../classes/class.Reseau.php';

    // Requete en POST et en GET
    if(isset($_POST["id"])){            
        $_GET["id"] = $_POST["id"]; 
    }else{ 
        if(isset($_GET["id"])){   
            $_POST["id"] = $_GET["id"];}
    }
    // Si le paramètre id existe
    if(isset($_POST["id"]) ){    
        $sql = "SELECT * FROM reseau WHERE ID_RESEAU = ?";
        //Préparation de la requete
        $requete = $pdo->prepare($sql);
        // Paramètre : id de la reseau
        $requete->bindValue(1, $_POST['id']);
         // create a reseau of null
        $reseau = null;
        //Condition si la requete renvoi quelque chose
        if($requete->execute()) {
            // Alors parcourirs les résultats de la requete
            if($donnees = $requete->fetch()){
                // Créer un nouvel objet Reseau
                $reseau = new Reseau(
                    $donnees['ID_RESEAU'],
                    $donnees['nom'],
                    $donnees['lien'],
                );
            };
        };
        echo json_encode($reseau);
    }else{
    // Si pas de id erreur, on retourne -1
    echo -1;
    }
?>
