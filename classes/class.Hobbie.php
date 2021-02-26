<?php

require_once ('class.Personne.php');

class Hobbie implements Jsonserializable{
    private $id             = 0;
    private $nom            = null;
    private $info           = null;

    private $laPersonne     = array();

    //Constructo

    public function __construct($id, $nom, $info){
        $this->id           = $id;
        $this->nom          = $nom;
        $this->info         = $info;
    }

    //Getter

    public function getId()                     {return $this->id;} 
    public function getNom()                    {return $this->nom;}
    public function getInfo()                   {return $this->info;} 

    public function getLaPersonne()             {return $this->laPersonne;} 

    //Setter

    public function setId($id)                   {$this->id = $id;} 
    public function setNom($nom)                 {$this->nom = $nom;}
    public function setInfo($info)               {$this->info = $info;} 

    public function setLaPersonne()              {$this->laPersonne;}
    
    public function jsonSerialize(){return get_object_vars($this);}


}

?>