<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';
    
    
    if(isset($_POST["nom"])){
        
        $sql = "INSERT INTO experience_pro(nom, activite, entreprise, periode_deb, periode_fin) VALUES(?, ?, ?, ?, ?)";
        $requete = $pdo->prepare($sql);
        $requete->bindParam(1, $_POST['nom']);
        $requete->bindParam(2, $_POST['activite']);
        $requete->bindParam(3, $_POST['entreprise']);
        $requete->bindParam(4, $_POST['periode_deb']);
        $requete->bindParam(5, $_POST['periode_fin']);
        echo $requete->execute();

        $sql2 = "SELECT ID_EXPERIENCE_PRO, nom FROM experience_pro WHERE nom = ?";
        $requete2 = $pdo->prepare($sql2);
        $requete2->bindParam(1, $_POST['nom']);
        echo $requete2->execute();

        $theID = $requete2->fetch()[0];

        $sql3= "INSERT INTO avoir (ID_EXPERIENCE_PRO, ID_PERSONNE) VALUES(?, 1)";
        $requete3 = $pdo->prepare($sql3);
        $requete3->bindParam(1, $theID);
        echo  $requete3->execute();

    }else{
        echo -1;
    }
?>