<?php

    require_once '../cnx.php';
    require_once '../classes/class.Reseau.php';

    $sql = "SELECT * FROM reseau";

    $requete = $pdo->prepare($sql);

    $listerese=array();

    if($requete->execute()){
        while($donnees = $requete->fetch()){
            $rese = new Reseau(
                $donnees['ID_RESEAU'],
                $donnees['nom'],
                $donnees['lien'],
                $donnees['logo']
            );
            $listerese[]=$rese;
        }
    }
    echo json_encode($listerese);
?>