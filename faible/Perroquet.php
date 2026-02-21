<?php
class Perroquet extends Animal{
    protected string $motFavori;

    public function __construct(string $nom, int $age, string $motFavori) {
        parent::__construct($nom, $age);
        $this->motFavori = $motFavori;
    }
    public function parler(): string {
        return $this->motFavori . " " . $this->motFavori . " !";
    }
}