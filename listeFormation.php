<?php
    header("Access-Control-Allow-Origin: *");

    require_once 'cnx.php';
    require_once 'classes/class.Formation.php';


    $sql = "SELECT * FROM formation";

    $requete = $pdo->prepare($sql);

    $listeForma = array();

    if($requete->execute()){
        while($donnees = $requete->fetch()){
            $Forma = new Formation(
                $donnees['ID_FORMATION'],
                $donnees['nom'],
                $donnees['etablissement'],
                $donnees['ville'],
                $donnees['departement'],
                $donnees['annee'],
            );
            $listeForma[] = $Forma;
        }
    }
    // Encodage et affichage du flux Json
    echo json_encode($listeForma);
?>