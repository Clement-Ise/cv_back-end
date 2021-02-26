<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';    
    
    if(isset($_POST['id'])){
        // delete the formation
        $sql = "DELETE FROM formation WHERE ID_FORMATION = ? ";
        // prepare the request
        $requete = $pdo->prepare($sql);
        // parameters : id formation
        $requete->bindValue(1, $_POST['id']);
        echo $requete->execute();


        // delete the relation
        $sql2 = "DELETE FROM suivre WHERE ID_FORMATION = ? ";
        // prepare the request
        $requete2 = $pdo->prepare($sql2);
        // parameters : id formation
        $requete2->bindValue(1, $_POST['id']);
        $requete2->execute();
        
    }else{
        echo -1;
    }
    
?>