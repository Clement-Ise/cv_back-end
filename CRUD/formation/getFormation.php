<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';
    require_once '../../classes/class.Formation.php';

    // Requete en POST et en GET
    if(isset($_POST["id"])){            
        $_GET["id"] = $_POST["id"]; 
    }else{ 
        if(isset($_GET["id"])){   
            $_POST["id"] = $_GET["id"];}
    }
    // Si le paramètre id existe
    if(isset($_POST["id"]) ){    
        $sql = "SELECT * FROM formation WHERE ID_FORMATION = ?";
        //Préparation de la requete
        $requete = $pdo->prepare($sql);
        // Paramètre : id de la Formation
        $requete->bindValue(1, $_POST['id']);
         // create a Formation of null
        $formation = null;
        //Condition si la requete renvoi quelque chose
        if($requete->execute()) {
            // Alors parcourirs les résultats de la requete
            if($donnees = $requete->fetch()){
                // Créer un nouvel objet Formation
                $formation = new Formation(
                    $donnees['ID_FORMATION'],
                    $donnees['nom'],
                    $donnees['etablissement'],
                    $donnees['ville'],
                    $donnees['departement'],
                    $donnees['annee'],
                );
            };
        };
        echo json_encode($formation);
    }else{
    // Si pas de id erreur, on retourne -1
    echo -1;
    }
?>
