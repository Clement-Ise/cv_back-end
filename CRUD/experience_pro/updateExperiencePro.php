<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';    
    
    if(isset($_POST['id'])){
        // update the competence
        $sql = "UPDATE experience_pro SET nom = ?, activite = ?, entreprise = ?, periode_deb = ?, periode_fin = ? WHERE ID_EXPERIENCE_PRO = ? ";
        // prepare the request
        $requete = $pdo->prepare($sql);
        // parameters competence
        $requete->bindValue(1, $_POST['nom']);
        $requete->bindValue(2, $_POST['activite']);
        $requete->bindValue(3, $_POST['entreprise']);
        $requete->bindValue(4, $_POST['periode_deb']);
        $requete->bindValue(5, $_POST['periode_fin']);
        $requete->bindValue(6, $_POST['id']);
        echo $requete->execute();
    }else{
        echo -1;
    }
?>
