<?php

require_once('class.Personne.php');

class Formation implements Jsonserializable{
    private $id             = 0;
    private $nom            = null;
    private $etablissement  = null;
    private $ville          = null;
    private $departement    = null;
    private $annee          = 0;

    private $laPersonne     = array();

    //Constructor

    public function __construct($id, $nom, $etablissement, $ville, $departement, $annee){
        $this->id                   = $id;
        $this->nom                  = $nom;
        $this->etablissement        = $etablissement;
        $this->ville                = $ville;
        $this->departement          = $departement;
        $this->annee                = $annee;
    }

    //Getter

    public function getId()                                 {return $this->id;}
    public function getNom()                                {return $this->nom;}
    public function getEtablissement()                      {return $this->etablissement;}
    public function getVille()                              {return $this->ville;}
    public function getDepartement()                        {return $this->departement;}
    public function getAnnee()                              {return $this->annee;}

    
    public function getLaPersonne()                         {return $this->laPersonne;}

    //Setter

    public function setId($id)                              {$this->id = $id;}
    public function setNom($nom)                            {$this->nom = $nom;}
    public function etEtablissement($etablissement)         {$this->etablissement = $etablissement;}
    public function setVille($ville)                        {$this->ville = $ville;}
    public function setDepartement($departement)            {$this->departement = $departement;}
    public function setAnnee($annee)                        {$this->annee = $annee;}

    public function setLaPersonne($laPersonne)              {$this->laPersonne = $laPersonne;}

    public function jsonSerialize(){return get_object_vars($this);}
}
?>