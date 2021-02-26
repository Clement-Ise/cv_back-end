<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';
    
    
    if(isset($_POST["nom"])){
        
        $sql = "INSERT INTO formation (nom, etablissement, ville, departement, annee) VALUES(?, ?, ?, ?, ?)";
        $requete = $pdo->prepare($sql);
        $requete->bindParam(1, $_POST['nom']);
        $requete->bindParam(2, $_POST['etablissement']);
        $requete->bindParam(3, $_POST['ville']);
        $requete->bindParam(4, $_POST['departement']);
        $requete->bindParam(5, $_POST['annee']);
        echo $requete->execute();

        $sql2 = "SELECT ID_FORMATION, nom FROM formation WHERE nom = ?";
        $requete2 = $pdo->prepare($sql2);
        $requete2->bindParam(1, $_POST['nom']);
        echo $requete2->execute();

        $theID = $requete2->fetch()[0];

        $sql3= "INSERT INTO suivre (ID_FORMATION, ID_PERSONNE) VALUES(?, 1)";
        $requete3 = $pdo->prepare($sql3);
        $requete3->bindParam(1, $theID);
        echo  $requete3->execute();

    }else{
        echo -1;
    }
    