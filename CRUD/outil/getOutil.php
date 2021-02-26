<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';
    require_once '../../classes/class.Outil.php';

    // Requete en POST et en GET
    if(isset($_POST["id"])){            
        $_GET["id"] = $_POST["id"]; 
    }else{ 
        if(isset($_GET["id"])){   
            $_POST["id"] = $_GET["id"];}
    }
    // Si le paramètre id existe
    if(isset($_POST["id"]) ){    
        $sql = "SELECT * FROM outil WHERE ID_OUTIL = ?";
        //Préparation de la requete
        $requete = $pdo->prepare($sql);
        // Paramètre : id de la Outil
        $requete->bindValue(1, $_POST['id']);
         // create a Outil of null
        $outil = null;
        //Condition si la requete renvoi quelque chose
        if($requete->execute()) {
            // Alors parcourirs les résultats de la requete
            if($donnees = $requete->fetch()){
                // Créer un nouvel objet Outil
                $outil = new Outil(
                    $donnees['ID_OUTIL'],
                    $donnees['genre'],
                    $donnees['nom'],
                );
            };
        };
        echo json_encode($outil);
    }else{
    // Si pas de id erreur, on retourne -1
    echo -1;
    }
?>
