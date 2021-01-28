<?php

require_once('class.Personne.php');

class ExperiencePro implements Jsonserializable{
    private $id                 = 0;
    private $nom                = null;
    private $activite           = null;
    private $entreprise         = null;
    private $periode_deb        = null;
    private $periode_fin        = null;
    private $departement        = null;
    private $cp                 = 0;
    private $logo               = null;

    private $laPersonne         = array();

    //Constructor

    public function __construct($id, $nom, $activite, $entreprise, $periode_deb, $periode_fin, $departement, $cp, $logo)
    {
        $this->id              = $id;
        $this->nom             = $nom;
        $this->activite        = $activite;
        $this->entreprise      = $entreprise;
        $this->periode_deb     = $periode_deb;
        $this->periode_fin     = $periode_fin;
        $this->departement     = $departement;
        $this->cp              = $cp;
        $this->logo            = $logo;
    }

    //Getter
    public function getId()                         {return $this->id;}
    public function getNom()                        {return $this->nom;}
    public function getActivite()                   {return $this->activite;}
    public function getEntrepise()                  {return $this->entreprise;}
    public function getPeriode_Deb()                {return $this->periode_deb;}
    public function getPeriode_Fin()                {return $this->periode_fin;}
    public function getDepartement()                {return $this->departement;}
    public function getCp()                         {return $this->cp;}
    public function getLogo()                       {return $this->logo;}

    public function getLaPersonne()                 {return $this->laPersonne;}

    //Setter

    public function setIg($id)                      {$this->id = $id;}
    public function setNom($nom)                    {$this->nom = $nom;}
    public function setActivite($activite)          {$this->activite = $activite;}
    public function setEntrepise($entreprise)       {$this->entreprise = $entreprise;}
    public function setPeriode_Deb($periode_deb)    {$this->periode_deb = $periode_deb;}
    public function setPeriode_Fin($periode_fin)    {$this->periode_fin = $periode_fin;}
    public function setDepartement($departement)    {$this->departement = $departement;}
    public function setCp($cp)                      {$this->cp = $cp;}
    public function setLogo($logo)                  {$this->logo = $logo;}

    public function setLaPersonne($laPersonne)      {$this->laPersonne = $laPersonne;}
    
    

    public function jsonSerialize(){return get_object_vars($this);}

}



?>