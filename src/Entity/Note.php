<?php
namespace App\Entity;

use App\Entity\Etudiant;
use App\Entity\Matiere;

class Note {
   private int $id;
   private Etudiant $etudiant;
   private  float $valeur;
   private Matiere $matiere;
   private string $date;

   public function __construct(int $id, Etudiant $etudiant, float $valeur, Matiere $matiere, string $date) {
      $this->id = $id;
      $this->etudiant = $etudiant;
      $this->valeur = $valeur;
      $this->matiere = $matiere;
      $this->date = $date;
   }

   public function getId(): int {
      return $this->id;
   }

   public function getEtudiant(): Etudiant {
      return $this->etudiant;
   }

   public function getValeur(): float {
      return $this->valeur;
   }

   public function getMatiere(): Matiere {
      return $this->matiere;
   }

   public function getDate(): string {
      return $this->date;
   }

   public function setId(int $id): void {
      $this->id = $id;
   }

   public function setEtudiant(Etudiant $etudiant): void {
      $this->etudiant = $etudiant;
   }

   public function setValeur(float $valeur): void {
      $this->valeur = $valeur;
   }

   public function setMatiere(Matiere $matiere): void {
      $this->matiere = $matiere;
   }

   public function setDate(string $date): void {
      $this->date = $date;
   }
}