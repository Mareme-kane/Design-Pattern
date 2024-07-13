<?php
require_once "../Model/Etudiant.php";
require_once "../Model/Professeur.php";

$e1=new Etudiant(1,"Diouf","Cherif",565667);
echo($e1->getId()." ".$e1->getNom()." ".$e1->getPrenom()."  ".$e1->getNumEtu());
//instanciation Professeur
$p1=new Professeur(1,"Diouf","Cherif",45465439);
echo($p1->getId()." ".$p1->getNom()." ".$p1->getPrenom()."  ".$p1->getMatricule());