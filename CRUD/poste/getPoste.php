<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';
    require_once '../../classes/class.Poste.php';

    // Requete en POST et en GET
    if(isset($_POST["id"])){            
        $_GET["id"] = $_POST["id"]; 
    }else{ 
        if(isset($_GET["id"])){   
            $_POST["id"] = $_GET["id"];}
    }
    // Si le paramètre id existe
    if(isset($_POST["id"]) ){    
        $sql = "SELECT * FROM poste WHERE ID_POSTE = ?";
        //Préparation de la requete
        $requete = $pdo->prepare($sql);
        // Paramètre : id de la reseau
        $requete->bindValue(1, $_POST['id']);
         // create a poste of null
        $poste = null;
        //Condition si la requete renvoi quelque chose
        if($requete->execute()) {
            // Alors parcourirs les résultats de la requete
            if($donnees = $requete->fetch()){
                // Créer un nouvel objet Poste
                $poste = new Poste(
                    $donnees['ID_POSTE'],
                    $donnees['nom'],
                    $donnees['periode_deb'],
                    $donnees['periode_fin'],
                );
            };
        };
        echo json_encode($poste);
    }else{
    // Si pas de id erreur, on retourne -1
    echo -1;
    }
?>
