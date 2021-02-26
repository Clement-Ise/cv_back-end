<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';    
    
    if(isset($_POST['id'])){
        // delete the langue
        $sql = "DELETE FROM outil WHERE ID_OUTIL = ? ";
        // prepare the request
        $requete = $pdo->prepare($sql);
        // parameters : id langue
        $requete->bindValue(1, $_POST['id']);
        echo $requete->execute();


        // delete the relation
        $sql2 = "DELETE FROM utiliser WHERE ID_OUTIL = ? ";
        // prepare the request
        $requete2 = $pdo->prepare($sql2);
        // parameters : id langue
        $requete2->bindValue(1, $_POST['id']);
        $requete2->execute();
        
    }else{
        echo -1;
    }
    
?>