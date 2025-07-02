<?php 

require_once "personne.php";


$etud = new Etudiant(1 , "isaac" , 25);
$etud->ajouterNote([10,20,30,40]);
$etud->afficherDetails();
