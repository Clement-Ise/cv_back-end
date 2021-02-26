<?php 
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");

    require_once 'cnx.php';
    
    if(isset($_POST["nom"])){
        
        $sql = "INSERT INTO personne(nom, personne, date_naissance, departement, cp, ville, adresse, mail, telephone, permis, voiture) VALUES(? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? )";
        $requete = $pdo->prepare($sql);
        $requete->bindParam(1, $_POST['nom']);
        $requete->bindParam(2, $_POST['personne']);
        $requete->bindParam(3, $_POST['date_naissance']);
        $requete->bindParam(4, $_POST['departement']);
        $requete->bindParam(5, $_POST['cp']);
        $requete->bindParam(6, $_POST['ville']);
        $requete->bindParam(7, $_POST['adresse']);
        $requete->bindParam(8, $_POST['mail']);
        $requete->bindParam(9, $_POST['telephone']);
        $requete->bindParam(10, $_POST['permis']);
        $requete->bindParam(11, $_POST['voiture']);
        echo $requete->execute();
    }else{
        echo -1;
    }
?>