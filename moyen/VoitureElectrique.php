<?php

class VoitureElectrique extends Voiture{
    private $autonomieKm;

    public function __construct($marque, $modele, $kilometrage, $autonomieKm)
    {
        parent::__construct($marque, $modele, $kilometrage);
        $this->autonomieKm = $autonomieKm;
    }

    public function decrire(){
        return parent::decrire() . "| Electrique | Autonomie: " . $this->autonomieKm . "km ";
    }
}

// Résultats attendus :
$v1 = new Voiture("Toyota", "Yaris", 15000);
echo $v1->decrire();
$v2 = new VoitureElectrique("Tesla", "Model 3", 5000, 400);
echo $v2->decrire();