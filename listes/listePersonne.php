<?php
    require_once '../cnx.php';
    require_once '../classes/class.Personne.php';

    //Liste des personne avec tout leurs attributs
    $sql = "SELECT * 
    FROM personne";

        //Préparation de la requete
        $requete = $pdo->prepare($sql);
        //Tableau qui recuperera les données de ma requete
        $liste = array();

        //Condition si la requete renvoi quelque chose
        if($requete->execute()) {
            // Alors parcourirs les résultats de la requete
            while($donnees = $requete->fetch()){
                // Créer un nouvel objet Personne
                $moi = new Personne(
                    $donnees['ID_PERSONNE'],
                    $donnees['nom'],
                    $donnees['prenom'],
                    $donnees['date_naissance'],
                    $donnees['departement'],
                    $donnees['cp'],
                    $donnees['ville'],
                    $donnees['adresse'],
                    $donnees['mail'],
                    $donnees['telephone'],
                    $donnees['permis'],
                    $donnees['voiture']
                );
                // recherche de ces experience_pro lié à la personne

                $sql2 = "SELECT * FROM personne,avoir, experience_pro 
                WHERE personne.ID_PERSONNE = avoir.ID_PERSONNE 
                AND avoir.ID_EXPERIENCE_PRO = experience_pro.ID_EXPERIENCE_PRO";

                $requete2 = $pdo->prepare($sql2);
                
                $listeexpe = array();

                if($requete2->execute()){
                    while($donnees2 = $requete2->fetch()){
                        $expe = new ExperiencePro (
                            $donnees2['ID_EXPERIENCE_PRO'],
                            $donnees2['nom'],
                            $donnees2['activite'],
                            $donnees2['entreprise'],
                            $donnees2['periode_deb'],
                            $donnees2['periode_fin'],
                            $donnees2['departement'],
                            $donnees2['cp'],
                            $donnees2['logo']
                        );
                        $listeexpe[] =$expe;;
                    }
                }
                $moi->setLesExperiencesPros($listeexpe);
//******************************************************************************/
                // recherche de ces reseau lié à la personne

                $sql3 = "SELECT * FROM personne, etre,reseau 
                WHERE personne.ID_PERSONNE = etre.ID_PERSONNE 
                AND etre.ID_RESEAU = reseau.ID_RESEAU";

                $requete3 = $pdo->prepare($sql3);

                $listerese=array();

                if($requete3->execute()){
                    while($donnees3 = $requete3->fetch()){
                        $rese = new Reseau(
                            $donnees3['ID_RESEAU'],
                            $donnees3['nom'],
                            $donnees3['lien'],
                            $donnees3['logo']
                        );
                        $listerese[]=$rese;
                    }
                }
                $moi->setLesReseaux($listerese);

                // recherche de ces hobbie lié à la personne

                $sql4 = "SELECT * FROM personne, faire, hobbie 
                WHERE personne.ID_PERSONNE = faire.ID_PERSONNE 
                AND faire.ID_HOBBIE = hobbie.ID_HOBBIE";

                $requete4 = $pdo->prepare($sql4);

                $listehobb = array();

                if($requete4->execute()){
                    while($donnees4 = $requete4->fetch()){
                        $hobb = new Hobbie(
                            $donnees4['ID_HOBBIE'],
                            $donnees4['nom'],
                            $donnees4['info']
                        );
                       $listehobb[] = $hobb; 
                    }
                }
                $moi->setLesReseaux($listehobb);

                //rechercher des ces poste lié à la personne

                $sql5 = "SELECT*FROM personne,rechercher,poste
                WHERE personne.ID_PERSONNE = rechercher.ID_PERSONNE
                AND rechercher.ID_POSTE = poste.ID_POSTE";

                $requete5 = $pdo->prepare($sql5);

                $listepost = array();

                if($requete5->execute()){
                    while($donnees5 = $requete5->fetch()){
                        $post = new Poste(
                            $donnees5['ID_POSTE'],
                            $donnees5['nom'],
                            $donnees5['periode_deb'],
                            $donnees5['periode_fin']
                        );
                        $listepost[]=$post;
                    }
                }
                $moi->setLesPostes($listepost);

                //rechercher des ces outils lié à la personne 

                $sql6 ="SELECT * FROM personne, utiliser,outil
                WHERE personne.ID_PERSONNE = utiliser.ID_PERSONNE
                AND utiliser.ID_OUTIL = outil.ID_OUTIL";
                
                $requete6 = $pdo->prepare($sql6);

                $listeCompe = array();

                if($requete6->execute()){
                    while($donnees6 = $requete6->fetch()){
                        $Compe = new Outil(
                            $donnees6['ID_OUTIL'],
                            $donnees6['type'],
                            $donnees6['nom']
                        );
                        $listeCompe[]=$Compe;
                    }
                }    
                $moi->setLesOutils($listeCompe);

                //rechercher des ces formations lié à la personne 

                $sql7 = "SELECT * FROM personne, suivre,formation
                WHERE personne.ID_PERSONNE = suivre.ID_PERSONNE
                AND suivre.ID_FORMATION = formation.ID_FORMATION";

                $requete7 = $pdo->prepare($sql7);

                $listeForma = array();

                if($requete7->execute()){
                    while($donnees7 = $requete7->fetch()){
                        $Forma = new Formation(
                            $donnees7['ID_FORMATION'],
                            $donnees7['nom'],
                            $donnees7['etablissement'],
                            $donnees7['ville'],
                            $donnees7['departement'],
                            $donnees7['annee']
                        );
                        $listeForma = $Forma;
                    }
                }
                $moi->setLesFormations($listeForma);
                $liste[]=$moi;
            }
        }

    // Encodage et affichage du flux Json
    echo json_encode($liste);
?>