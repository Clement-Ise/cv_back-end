<?php

require_once ('class.Personne.php');

class Reseau implements Jsonserializable{
    private $id             = 0;
    private $nom            = null;
    private $lien           = null;

    private $laPersonne     = array();

    //Constuctor
    public function __construct($id, $nom, $lien){
        $this->id                   = $id;
        $this->nom                  = $nom;
        $this->lien                 = $lien;
    }

    //Getter
    
    public function getId()                     {return $this->id;}
    public function getNom()                    {return $this->nom;}
    public function getLien()                   {return $this->lien;}

    public function getLaPersonne()             {return $this->laPersonne;}
    
    //Setter

    public function setId($id)                  {$this->id = $id;}
    public function setNom($nom)                {$this->nom = $nom;}
    public function setLien($lien)              {$this->lien = $lien;}

    public function setLaPersonne($laPersonne)  {$this->laPersonee = $laPersonne;}

    public function jsonSerialize(){return get_object_vars($this);}
}


?> 