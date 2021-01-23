<?php 
require_once('class.Personne.php');

class Outil implements Jsonserializable{
    private $id                                 =0;
    private $type                               =null;
    private $nom                                =null;

    private $laPersonne                         = array();

    //Getter

    public function getId()                     {return $this->id;}
    public function getType()                   {return $this->type;}
    public function getNom()                    {return $this->nom;}

    public function getLaPersonne()             {return $this->laPersonne;}
    
    //Setter

    public function setId($id)                  {$this->id = $id;}
    public function setType($type)              {$this->type = $type;}
    public function setNom($nom)                 {$this->nom = $nom;}

    public function jsonSerialize(){return get_object_vars($this);}


}
?>