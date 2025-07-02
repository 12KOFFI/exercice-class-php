<?php 


interface affichable {
public function afficherDetails();
}

class personne {
  private $id;
    private $nom ;
     private $age ;

       function __construct($param1 , $param2 , $param3)
       { 
           $this -> id = $param1;
           $this -> nom = $param2;
            $this -> age = $param3; 
       }

       function setId ($param1){
            $this -> id = $param1;  
       }

       function getId (){
        return   $this -> id;
       }

       function setNom ($param2){
            $this -> nom = $param2;  
       }

       function getNom (){
        return   $this -> nom;
       }

       function setAge ($param3){
            $this -> age = $param3;  
       }

       function getAge (){
        return   $this -> id;
       }

       
        function sePresenter() {
          return "Bonjour, je m'appelle : {$this->nom}<br>Et j'ai : {$this->age} ans<br>";
      }
      
       


     
}

class etudiant extends personne implements affichable {

    private $notes = [];

    function ajouterNote ($notes){
      foreach ($notes as $note) {
        $this -> notes[] = $note;
      }
    }


    function calculerMoyenne () {

        $sommes = array_sum($this -> notes);
        $moyenne = $sommes / count($this -> notes);
        return $moyenne;

    }
      function afficherDetails  () {
      echo $this->sePresenter();
        echo "ID : {$this->getId()}<br>";
        echo "note : " . print_r($this->notes, true) . "<br>";

        echo "Moyenne : " .($this->calculerMoyenne()) . "<br>";
       }

}



