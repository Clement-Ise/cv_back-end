<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';    
    
    if(isset($_POST['id'])){
        // update the outil
        $sql = "UPDATE outil SET genre = ?, nom = ? WHERE ID_OUTIL = ? ";
        // prepare the request
        $requete = $pdo->prepare($sql);
        // parameters outil
        $requete->bindValue(1, $_POST['genre']);
        $requete->bindValue(2, $_POST['nom']);
        $requete->bindValue(3, $_POST['id']);
        echo $requete->execute();
    }else{
        echo -1;
    }
?>
