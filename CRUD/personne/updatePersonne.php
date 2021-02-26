<?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';    
    
    if(isset($_POST['id'])){
        // update the competence
        $sql = "UPDATE personne SET nom = ?, prenom = ?, departement = ?, cp  = ?, ville = ?, adresse = ?, mail = ?, telephone = ?, permis = ?, voiture = ?, qualification = ? WHERE ID_PERSONNE = 1 ";
        // prepare the request
        $requete = $pdo->prepare($sql);
        // parameters competence
        $requete->bindValue(1, $_POST['nom']);
        $requete->bindValue(2, $_POST['prenom']);
        $requete->bindValue(3, $_POST['departement']);
        $requete->bindValue(4, $_POST['cp']);
        $requete->bindValue(5, $_POST['ville']);
        $requete->bindValue(6, $_POST['adresse']);
        $requete->bindValue(7, $_POST['mail']);
        $requete->bindValue(8, $_POST['telephone']);
        $requete->bindValue(9, $_POST['permis']);
        $requete->bindValue(10, $_POST['voiture']);
        $requete->bindValue(11, $_POST['qualification']);
        echo $requete->execute();
    }else{
        echo -1;
    }
?>
