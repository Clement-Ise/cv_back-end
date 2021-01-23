<?php
require_once('class.ExperiencePro.php');
require_once('class.Reseau.php');
require_once('class.Hobbie.php');
require_once('class.Poste.php');
require_once('class.Outil.php');
require_once('class.Formation.php');


class Personne{
    private $id = 0;
    private $nom =null;
    private $prenom =null;
    private $date_naissance = null;
    private $departement =null;
    private $cp =0;
    private $ville =null;
    private $adresse =null;
    private $mail =null;
    private $telephone =0;
    private $permis = false;
    private $voiture = false;

    private $lesExperiencesPros = array();
    private $lesReseaux = array();
    private $lesHobbies = array();
    private $lesPostes = array();
    private $lesOutils = array();
    private $lesFormations = array();

}
?>