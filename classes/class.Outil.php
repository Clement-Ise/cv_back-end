<?php 
require_once ('class.Personne.php');

class Outil implements Jsonserializable{
    private $id           = 0;
    private $genre        = null;
    private $nom          = null;

    private $laPersonne   = array();

    public function __construct($id,$genre,$nom){
        $this->id         = $id;
        $this->genre      = $genre;
        $this->nom        = $nom;
    }

    //Getter

    public function getId()                     {return $this->id;}
    public function getGenre()                   {return $this->genre;}
    public function getNom()                    {return $this->nom;}

    public function getLaPersonne()             {return $this->laPersonne;}
    
    //Setter

    public function setId($id)                  {$this->id = $id;}
    public function setGenre($genre)              {$this->genre = $genre;}
    public function setNom($nom)                {$this->nom = $nom;}

    public function setLaPersonne($laPersonne)  {$this->laPersonne = $laPersonne;}

    public function jsonSerialize(){return get_object_vars($this);}


}
?>