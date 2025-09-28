<?php
namespace App\Banque;

class CompteEpargne extends Compte
{
    private float $tauxInteret;

    public function __construct(string $titulaire, float $soldeInitial = 100, float $tauxInteret = 7)
    {
        parent::__construct($titulaire, $soldeInitial);
        $this->tauxInteret = $tauxInteret;

        echo "<hr> <br> Compte épargne créé pour $titulaire avec un solde initial de $soldeInitial et un taux d'intérêt de $tauxInteret%.<hr> <br>";
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