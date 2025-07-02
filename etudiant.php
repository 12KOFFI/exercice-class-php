<?php
require_once "personne.php";
require_once "interface.php";

class Etudiant extends Personne implements Affichable {


    public function __construct(int $id, string $nom, int $age) {
        parent::__construct($id, $nom, $age);
    }

    private array $notes = [];

    public function ajouterNote(array $notes): void {
        foreach ($notes as $note) {
            $this->notes[] = $note;
        }
    }

    public function calculerMoyenne(): float {
        if (count($this->notes) === 0) {
            return 0;
        }

        $somme = array_sum($this->notes);
        return $somme / count($this->notes);
    }

    public function afficherDetails(): void {
        $this->sePresenter();
        echo "ID : {$this->getId()}<br>";
        echo "Notes : " . print_r($this->notes, true) . "<br>";
        echo "Moyenne : " . $this->calculerMoyenne() . "<br>";
    }
}
