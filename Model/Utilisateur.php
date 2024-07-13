<?php
class Utilisateur
{
    protected $id;
    protected $prenom;
    protected $nom;




    //constructeur
    public function __construct($id, $prenom, $nom)
    {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
    }
    //getteurs et setteurs
    public function setId ($id){
         $this->id = $id;  
    }
    public function setPrenom ($prenom){
         $this->prenom = $prenom; 
    }
    public function setNom ($nom){
        $this->nom = $nom;
             }
    public function getId (){
         return $this->id;
          }
    public function getNom (){
         return $this->nom;   
    }
    public function getPrenom (){
        return $this->prenom;
          }




    
    

}

