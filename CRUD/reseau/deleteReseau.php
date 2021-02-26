<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';    
    
    if(isset($_POST['id'])){
        // delete the reseau
        $sql = "DELETE FROM reseau WHERE ID_RESEAU = ? ";
        // prepare the request
        $requete = $pdo->prepare($sql);
        // parameters : id reseau
        $requete->bindValue(1, $_POST['id']);
        echo $requete->execute();


        // delete the relation
        $sql2 = "DELETE FROM etre WHERE ID_RESEAU = ? ";
        // prepare the request
        $requete2 = $pdo->prepare($sql2);
        // parameters : id reseau
        $requete2->bindValue(1, $_POST['id']);
        $requete2->execute();
        
    }else{
        echo -1;
    }
    
?>