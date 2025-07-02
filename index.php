<?php 

require_once "etudiant.php";

$etud = new Etudiant(1 , "isaac" , 25);
$etud->ajouterNote([10.5,15.5,14.2,12.5]);
$etud->afficherDetails();
