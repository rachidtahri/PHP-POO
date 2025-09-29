<?php
namespace App\Banque;
use App\Banque\Compte as CompteBanque;

class CompteEpargne extends CompteBanque
{
    private float $tauxInteret;

    public function __construct(string $nom, $prenom, float $soldeInitial = 100, float $tauxInteret = 7)
    {
        parent::__construct($nom, $prenom, $soldeInitial);
        $this->tauxInteret = $tauxInteret;
    }

    public function appliquerInterets(): void
    {
        $interets = $this->getSolde() * ($this->tauxInteret / 100);
        $this->crediter($interets);
    }

    public function getTauxInteret(): float
    {
        return $this->tauxInteret;
    }

    public function setTauxInteret(float $tauxInteret): void
    {
        if ($tauxInteret > 0) {
            $this->tauxInteret = $tauxInteret;
        } else {
            echo "Le taux d'intérêt doit être positif.\n";
        }
    }
}