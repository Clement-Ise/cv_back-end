  <?php
    header("Access-Control-Allow-Origin: *");

    require_once '../../cnx.php';    
    
    if(isset($_POST['id'])){
        // update the competence
        $sql = "UPDATE reseau SET nom = ?, lien = ? WHERE ID_RESEAU = ? ";
        // prepare the request
        $requete = $pdo->prepare($sql);
        // parameters competence
        $requete->bindValue(1, $_POST['nom']);
        $requete->bindValue(2, $_POST['lien']);
        $requete->bindValue(3, $_POST['id']);
        echo $requete->execute();
    }else{
        echo -1;
    }
?>
