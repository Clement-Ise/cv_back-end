<?php

    require_once 'cnx.php';
    require_once 'classes/class.Poste.php';

    $sql = "SELECT*FROM poste";

    $requete = $pdo->prepare($sql);

    $listepost = array();

    if($requete->execute()){
        while($donnees = $requete->fetch()){
            $post = new Poste(
                $donnees['ID_POSTE'],
                $donnees['nom'],
                $donnees['periode_deb'],
                $donnees['periode_deb']
            );
            $listepost[]=$post;
        }
    }
    echo json_encode($listepost);
?>