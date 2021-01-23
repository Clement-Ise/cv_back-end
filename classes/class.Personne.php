<?php
require_once('class.ExperiencePro.php');
require_once('class.Reseau.php');
require_once('class.Hobbie.php');
require_once('class.Poste.php');
require_once('class.Outil.php');
require_once('class.Formation.php');


class Personne implements JsonSerializable{
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
    private $lePostes = null;
    private $lesOutils = array();
    private $lesFormations = array();

    //Constructor
    public function __construct($id = 0,$nom =null,$prenom =null,$date_naissance = null, $departement =null,$cp =0,$ville =null,$adresse =null,$mail =null,$telephone =0,$permis = false,$voiture = false){
        $this->id                 =$id;
        $this->nom                =$nom;
        $this->prenom             =$prenom;
        $this->date_naissance     =$date_naissance;
        $this->departement        =$departement;
        $this->cp                 =$cp;
        $this->ville              =$ville;
        $this->adresse            =$adresse;
        $this->mail               =$mail;
        $this->telephone          =$telephone;
        $this->permis             =$permis;
        $this->voiture            =$voiture;
    }   

    //Getter
    public function getId()                     {return $this->id;}
    public function getNom()                    {return $this->nom;}
    public function getPrenom()                 {return $this->prenom;}
    public function getDate_Naissance()         {return $this->date_naissance;}
    public function getDepartement()            {return $this->departement;}
    public function getCp()                     {return $this->cp;}
    public function getVille()                  {return $this->ville;}
    public function getAdresse()                {return $this->adresse;}
    public function getMail()                   {return $this->mail;}
    public function getTelephone()              {return $this->telephone;}
    public function getPermis()                 {return $this->permis;}
    public function getVoiture()                {return $this->voiture;} 

    public function getLesExperiencesPros()     {return $this->lesExperiencesPros;}
    public function getLesReseaux()             {return $this->lesReseaux;}
    public function getLesHobbies()             {return $this->lesHobbies;}
    public function getLePoste()                {return $this->lePoste;}
    public function getLesOutils()              {return $this->lesOutils;}
    public function getLesFormations()          {return $this->lesFormations;}
       

    //Setter
    public function setId($id)                                          {$this->id = $id;}
    public function setNom($nom)                                        {$this->nom = $nom;}
    public function setPrenom($prenom)                                  {$this->prenom = $prenom;}
    public function setDate_Naissance($date_naissance)                  {$this->date_naissance = $date_naissance;}
    public function setDepartement($departement)                        {$this->departement = $departement;}
    public function setCp($cp)                                          {$this->cp = $cp;}
    public function sgetVille($ville)                                    {$this->ville = $ville;}
    public function setAdresse($adresse)                                {$this->adresse = $adresse;}
    public function setMail($mail)                                      {$this->mail = $mail;}
    public function setTelephone($telephone)                            {$this->telephone = $telephone;}
    public function setPermis($permis)                                  {$this->permis = $permis;}
    public function setVoiture($voiture)                                {$this->voiture = $voiture;} 

    public function setLesExperiencesPros($lesExperiencesPros)          {$this->lesExperiencesPros = $lesExperiencesPros;}
    public function setLesReseaux($lesReseaux)                          {$this->lesReseaux = $lesReseaux;}
    public function setLesHobbies($lesHobbies)                          {$this->lesHobbies = $lesHobbies;}
    public function setLePoste($lePostes)                               {$this->lePoste = $lePostes;}
    public function setLesOutils($lesOutils)                            {$this->lesOutils = $lesOutils;}
    public function setLesFormations($lesFormations)                    {$this->lesFormations = $lesFormations;}

    public function jsonSerialize(){
        return get_object_vars($this);
    }

}
?>