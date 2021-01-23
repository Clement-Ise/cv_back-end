<?php

require_once('class.Personne.php');

class Reseau implements Jsonserializable{
    private $id =0;
    private $nom =null;
    private $lien =null;
    private $logo =null;

    private $laPersonne = array();

    //Constuctor
    public function __construct($id =0, $nom =null, $lien =null, $logo =null){
        $this->id                   = $id;
        $this->nom                  = $nom;
        $this->lien                 = $lien;
        $this->logo                 = $logo;
    }

    //Getter
    
    public function getId()                     {return $this->id;}
    public function getNom()                    {return $this->nom;}
    public function getLien()                   {return $this->lien;}
    public function getLogo()                   {return $this->logo;}

    public function getLaPersonne()             {return $this->laPersonne;}
    
    //Setter

    public function setId($id)                  {$this->id = $id;}
    public function setNom($nom)                {$this->nom = $nom;}
    public function setLien($logo)              {$this->lien = $lien;}
    public function setLogo($logo)              {$this->logo = $logo;}

    public function setLaPersonne($laPersonne)  {$this->id = $laPersonne;}

    public function jsonSerialize(){return get_object_vars($this);}
}


?> 