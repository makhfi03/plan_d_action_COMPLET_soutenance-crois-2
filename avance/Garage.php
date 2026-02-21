<!-- pas encore finis! -->

<?php

class Garage
{
    private static $nbGarages;
    private array $voitures;


    public function ajouterVoiture($voiture)
    {
        $this->voitures = $voiture;
    }

    public function retirerVoiture($voiture)
    {
        foreach ($this->voitures as $var => $v) {

            if ($v == $voiture) {
                unset($this->voitures[$var]);
                break;
            }
        }
    }

    public function listerVoitures()
    {
        return $this->voitures;
    }

}
