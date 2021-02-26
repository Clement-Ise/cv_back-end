<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';    
    
    if(isset($_POST['id'])){
        // delete the hoobie
        $sql = "DELETE FROM hobbie WHERE ID_HOBBIE = ? ";
        // prepare the request
        $requete = $pdo->prepare($sql);
        // parameters : id hobbie
        $requete->bindValue(1, $_POST['id']);
        echo $requete->execute();


        // delete the relation
        $sql2 = "DELETE FROM faire WHERE ID_HOBBIE = ? ";
        // prepare the request
        $requete2 = $pdo->prepare($sql2);
        // parameters : id hobbie
        $requete2->bindValue(1, $_POST['id']);
        $requete2->execute();
        
    }else{
        echo -1;
    }
    
?>