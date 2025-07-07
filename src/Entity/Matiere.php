<?php
namespace App\Entity;

class Matiere {
  private int $id;
  private string $nom;
  private int $coeff;

  public function __construct(int $id, string $nom, int $coeff) {
    $this->id = $id;
    $this->nom = $nom;
    $this->coeff = $coeff;
  }

  public function setId(int $id): void {
    $this->id = $id;
  }

  public function getId(): int {
    return $this->id;
  }

  public function setNom(string $nom): void {
    $this->nom = $nom;
  }

  public function getNom(): string {
    return $this->nom;
  }

  public function setCoeff(int $coeff): void {
    $this->coeff = $coeff;
  }

  public function getCoeff(): int {
    return $this->coeff;
  }
  
};
    
    