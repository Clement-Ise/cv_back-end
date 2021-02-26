<?php
require_once ('class.ExperiencePro.php');
require_once ('class.Reseau.php');
require_once ('class.Hobbie.php');
require_once ('class.Poste.php');
require_once ('class.Outil.php');
require_once ('class.Formation.php');

class Personne implements JsonSerializable 
{
    private $id                     = 0;
    private $nom                    = null;
    private $prenom                 = null;
    private $departement            = null;
    private $cp                     = 0;
    private $ville                  = null;
    private $adresse                = null;
    private $mail                   = null;
    private $telephone              = null;
    private $permis                 = null;
    private $voiture                = null;
    private $qualification          = null;

    private $lesExperiencesPros     = array();
    private $lesReseaux             = array();
    private $lesHobbies             = array();
    private $lesPostes              = array();
    private $lesOutils              = array();
    private $lesFormations          = array();
   

    // Constructor
    public function __construct($id, $nom, $prenom, $departement, $cp, $ville, $adresse, $mail, $telephone, $permis, $voiture, $qualification)
    {
        $this->id                 = $id;
        $this->nom                = $nom;
        $this->prenom             = $prenom;
        $this->departement        = $departement;
        $this->cp                 = $cp;
        $this->ville              = $ville;
        $this->adresse            = $adresse;
        $this->mail               = $mail;
        $this->telephone          = $telephone;
        $this->permis             = $permis;
        $this->voiture            = $voiture;
        $this->qualification      = $qualification;
    }
    //Getter
    public function getId()                     {return $this->id;}
    public function getNom()                    {return $this->nom;}
    public function getPrenom()                 {return $this->prenom;}
    public function getDepartement()            {return $this->departement;}
    public function getCp()                     {return $this->cp;}
    public function getVille()                  {return $this->ville;}
    public function getAdresse()                {return $this->adresse;}
    public function getMail()                   {return $this->mail;}
    public function getTelephone()              {return $this->telephone;}
    public function getPermis()                 {return $this->permis;}
    public function getVoiture()                {return $this->voiture;} 
    public function getQualification()          {return $this->qualification;}

    public function getLesExperiencesPros()     {return $this->lesExperiencesPros;}
    public function getLesReseaux()             {return $this->lesReseaux;}
    public function getLesHobbies()             {return $this->lesHobbies;}
    public function getLesPoste()               {return $this->lesPostes;}
    public function getLesOutils()              {return $this->lesOutils;}
    public function getLesFormations()          {return $this->lesFormations;}
       

    //Setter
    public function setId($id)                                          {$this->id = $id;}
    public function setNom($nom)                                        {$this->nom = $nom;}
    public function setPrenom($prenom)                                  {$this->prenom = $prenom;}
    public function setDepartement($departement)                        {$this->departement = $departement;}
    public function setCp($cp)                                          {$this->cp = $cp;}
    public function sgetVille($ville)                                   {$this->ville = $ville;}
    public function setAdresse($adresse)                                {$this->adresse = $adresse;}
    public function setMail($mail)                                      {$this->mail = $mail;}
    public function setTelephone($telephone)                            {$this->telephone = $telephone;}
    public function setPermis($permis)                                  {$this->permis = $permis;}
    public function setVoiture($voiture)                                {$this->voiture = $voiture;} 
    public function setQualification($qualification)                    {$this->qualification = $qualification;}

    public function setLesExperiencesPros($lesExperiencesPros)          {$this->lesExperiencesPros = $lesExperiencesPros;}
    public function setLesReseaux($lesReseaux)                          {$this->lesReseaux = $lesReseaux;}
    public function setLesHobbies($lesHobbies)                          {$this->lesHobbies = $lesHobbies;}
    public function setLesPostes($lesPostes)                             {$this->lesPostes = $lesPostes;}
    public function setLesOutils($lesOutils)                            {$this->lesOutils = $lesOutils;}
    public function setLesFormations($lesFormations)                    {$this->lesFormations = $lesFormations;}

    public function jsonSerialize(){
    return get_object_vars($this);
    }
}
?>