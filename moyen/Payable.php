<?php
interface Payable
{
    public function payer(float $montant);
    public function rembourser(float $montant);
}
interface Notifiable
{
    public function envoyerNotification(string $message);
}

class Client implements Payable, Notifiable
{
    private $nom;
    private $solde;

    public function __construct($nom, $solde = 0)
    {
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function payer(float $montant)
    {
        $this->solde -= $montant;
        return "{$this->nom} a payé {$montant}DH. Nouveau solde : {$this->solde}DH";
    }

    public function rembourser(float $montant)
    {
        $this->solde += $montant;
        return "{$this->nom} a été remboursé de {$montant}DH. Nouveau solde : {$this->solde}DH";
    }

    public function envoyerNotification( $message)
    {
        return "Notification envoyée à {$this->nom} : {$message}";
    }
}

$client = new Client("Ahmed", 100);

echo $client->payer(30) . PHP_EOL;
echo $client->rembourser(10) . PHP_EOL;
echo $client->envoyerNotification("Votre paiement a été traité.") . PHP_EOL;
