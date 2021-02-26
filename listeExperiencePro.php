<?php
    header("Access-Control-Allow-Origin: *");

    require_once 'cnx.php';
    require_once 'classes/class.ExperiencePro.php';

    $sql = "SELECT * FROM experience_pro";
    $requete = $pdo->prepare($sql);

    $liste = array();
    if($requete->execute()){
        while($donnees = $requete->fetch()){
            $expe = new ExperiencePro (
                $donnees["ID_EXPERIENCE_PRO"],
                $donnees["nom"],
                $donnees["activite"],
                $donnees["entreprise"],
                $donnees["periode_deb"],
                $donnees["periode_fin"]
            );
            $liste[]= $expe;
        }
    }
    echo json_encode($liste);
?>