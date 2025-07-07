<?php
namespace App;

class Voiture {
    private int $id;
    private string $nom;

    public function __construct(int $id, string $nom) {
        $this->id = $id;
        $this->nom = $nom;
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
}

