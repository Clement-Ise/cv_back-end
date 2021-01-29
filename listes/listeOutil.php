<?php

    require_once '../cnx.php';
    require_once '../classes/class.Outil.php';

    $sql ="SELECT * FROM outil";
    
    $requete = $pdo->prepare($sql);

    $listeCompe = array();

    if($requete->execute()){
        while($donnees = $requete->fetch()){
            $Compe = new Outil(
                $donnees['ID_OUTIL'],
                $donnees['type'],
                $donnees['nom'],
            );
            $listeCompe[]=$Compe;  
        }
    }  
    echo json_encode($listeCompe);
?>
