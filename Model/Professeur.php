<?php
require_once "../Model/Utilisateur.php";
class Professeur extends Utilisateur
{
    private $matricule;
    //Constructeur
    public function __construct($id, $prenom, $nom, $matricule)
    {
        parent::__construct($id, $prenom, $nom);
        $this->matricule = $matricule;
    }
    //Setter
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }
    //Getteur
    public function getMatricule(){
        return $this->matricule;
         }
}
