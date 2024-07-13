<?php
require_once "../Model/Utilisateur.php";
class Etudiant extends Utilisateur{
    private $numEtu;
    public function __construct($id, $prenom, $nom,$numEtu) {
        parent::__construct($id, $prenom, $nom);
        $this->numEtu= $numEtu;
    }
    public function setNumEtu($numEtu){
        $this->numEtu = $numEtu;  
   }
   public function getNumEtu(){
    return $this->numEtu;
     }
}
