<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';
    
    
    if(isset($_POST["nom"])){
        
        $sql = "INSERT INTO hobbie (nom, info) VALUES(?, ?)";
        $requete = $pdo->prepare($sql);
        $requete->bindParam(1, $_POST['nom']);
        $requete->bindParam(2, $_POST['info']);
        echo $requete->execute();

        $sql2 = "SELECT ID_HOBBIE, nom FROM hobbie WHERE nom = ?";
        $requete2 = $pdo->prepare($sql2);
        $requete2->bindParam(1, $_POST['nom']);
        echo $requete2->execute();

        $theID = $requete2->fetch()[0];

        $sql3= "INSERT INTO faire (ID_HOBBIE, ID_PERSONNE) VALUES(?, 1)";
        $requete3 = $pdo->prepare($sql3);
        $requete3->bindParam(1, $theID);
        echo  $requete3->execute();

    }else{
        echo -1;
    }
    