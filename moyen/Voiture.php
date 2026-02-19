<?php

class Voiture{
    private $marque;
    private $modele;
    private $kilometrage;

    public function __construct($marque, $modele, $kilometrage)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $kilometrage;
    }

    public function decrire(){
        return $this->marque . " " . $this->modele . " - " . $this->kilometrage . "km ";
    }
}