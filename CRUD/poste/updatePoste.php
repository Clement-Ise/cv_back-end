<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';    
    
    if(isset($_POST['id'])){
        // update the competence
        $sql = "UPDATE poste SET nom = ?, periode_deb = ?, periode_fin = ? WHERE ID_POSTE = ? ";
        // prepare the request
        $requete = $pdo->prepare($sql);
        // parameters competence
        $requete->bindValue(1, $_POST['nom']);
        $requete->bindValue(2, $_POST['periode_deb']);
        $requete->bindValue(3, $_POST['periode_fin']);
        $requete->bindValue(4, $_POST['id']);
        echo $requete->execute();
    }else{
        echo -1;
    }
?>
