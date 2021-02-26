<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';
    require_once '../../classes/class.ExperiencePro.php';

    // Requete en POST et en GET
    if(isset($_POST["id"])){            
        $_GET["id"] = $_POST["id"]; 
    }else{ 
        if(isset($_GET["id"])){   
            $_POST["id"] = $_GET["id"];}
    }
    // Si le paramètre id existe
    if(isset($_POST["id"]) ){    
        $sql = "SELECT * FROM experience_pro WHERE ID_EXPERIENCE_PRO = ?";
        //Préparation de la requete
        $requete = $pdo->prepare($sql);
        // Paramètre : id de la reseau
        $requete->bindValue(1, $_POST['id']);
         // create a ExperiencePro of null
        $experience = null;
        //Condition si la requete renvoi quelque chose
        if($requete->execute()) {
            // Alors parcourirs les résultats de la requete
            if($donnees = $requete->fetch()){
                // Créer un nouvel objet ExperiencePro
                $experience = new ExperiencePro(
                    $donnees['ID_EXPERIENCE_PRO'],
                    $donnees['nom'],
                    $donnees['activite'],
                    $donnees['entreprise'],
                    $donnees['periode_deb'],
                    $donnees['periode_fin'],
                );
            };
        };
        echo json_encode($experience);
    }else{
    // Si pas de id erreur, on retourne -1
    echo -1;
    }
?>
