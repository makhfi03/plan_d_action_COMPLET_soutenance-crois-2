<?php

abstract class Animal
{
    protected $nom;
    protected $age;
    public function __construct(string $nom, int $age) {
        $this->nom = $nom;
        $this->age = $age;
    }
    abstract function parler();
    public function sePresenter(){
        return "Je suis {$this->nom} : " . $this->parler();
    }
}
