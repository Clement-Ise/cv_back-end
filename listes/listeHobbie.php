<?php

    require_once '../cnx.php';
    require_once '../classes/class.Hobbie.php';

    $sql = "SELECT * FROM hobbie";
                
    $requete = $pdo->prepare($sql);

    $listehobb = array();

    if($requete->execute()){
        while($donnees = $requete->fetch()){
            $hobb = new Hobbie(
                $donnees['ID_HOBBIE'],
                $donnees['nom'],
                $donnees['info'],
            );
            $listehobb[] = $hobb; 
        }
    }
    echo json_encode($listehobb);
?>