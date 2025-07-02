<?php

class Personne {
    private int $id;
    private string $nom;
    private int $age;

    public function __construct(int $id, string $nom, int $age) {
        $this->id = $id;
        $this->nom = $nom;
        $this->age = $age;
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

    public function setAge(int $age): void {
        $this->age = $age;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function sePresenter(): void {
        echo "Bonjour, je m'appelle : {$this->nom}<br>Et j'ai : {$this->age} ans<br>";
    }
}

