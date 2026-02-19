<?php

class CompteBancaire{
    private string $titulaire;
    private float $solde;
    public function __construct($titulaire, $soldeInitial=0)
    {
       $this->titulaire = $titulaire;
       $this->solde = $soldeInitial;
    }

     public function deposer(float $montant)  {
        if ($montant > 0) {
            $this->solde += $montant;
            echo "Dépôt de $montant effectué ";
        }
    }

    public function retirer(float $montant): bool {
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
            return true;
        }
        return false;
    }

    public function getSolde(): float {
        return $this->solde;
    }

    public function afficherSolde(): string {
        return $this->titulaire . " Votre solde est: " . $this->solde . "DH";
    }
}

// Tests attendus :
// $compte = new CompteBancaire("Alice", 500.0);
// $compte = new CompteBancaire("Ghita", 2500.0);
// echo $compte->afficherSolde();
// $compte->deposer(200.0);
// echo $compte->getSolde();
// $resultat = $compte->retirer(1000.0);
// var_dump($resultat);