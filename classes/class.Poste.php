<?php
require_once('class.Personne.php');

class Poste implements Jsonserializable{
    private $id =0;
    private $nom =null;
    private $periode_deb =null;
    private $periode_fin =null;

    private $laPersonne = null;
    
    public function __construct($id =0, $nom =null, $periode_deb =null, $periode_fin =null){
        $this->id                   =$id;
        $this->nom                  =$nom;
        $this->periode_deb          =$periode_deb;
        $this->periode_fin          =$periode_fin;
    }

    //Getter

    public function getId()                      {return $this->id;}
    public function getNom()                     {return $this->nom;} 
    public function getPeriode_deb()             {return $this->periode_deb;} 
    public function getPeriode_fin()             {return $this->periode_fin;} 

    public function getLaPersonee()              {return $this->LaPersonee;}

    //Setter

    public function setId($id)                          {$this->id = $id;}
    public function setNom($nom)                        {$this->nom = $nom;} 
    public function setPeriode_deb($periode_deb)        {$this->periode_deb = $periode_deb;} 
    public function setPeriode_fin($periode_fin)        {$this->periode_fin = $periode_fin;} 

    public function setLaPersonee($laPersonne)          {$this->LaPersonee = $laPersonne;}

    public function jsonSerialize(){return get_object_vars($this);}
}
?>
