<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';    
    
    if(isset($_POST['id'])){
        // update the competence
        $sql = "UPDATE formation SET nom = ?, etablissement = ?, ville = ?, departement  = ?, annee = ? WHERE ID_FORMATION = ? ";
        // prepare the request
        $requete = $pdo->prepare($sql);
        // parameters competence
        $requete->bindValue(1, $_POST['nom']);
        $requete->bindValue(2, $_POST['etablissement']);
        $requete->bindValue(3, $_POST['ville']);
        $requete->bindValue(4, $_POST['departement']);
        $requete->bindValue(5, $_POST['annee']);
        $requete->bindValue(6, $_POST['id']);

        echo $requete->execute();
    }else{
        echo -1;
    }
?>
