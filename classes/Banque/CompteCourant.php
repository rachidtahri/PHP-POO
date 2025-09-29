<?php
namespace App\Banque;
use App\Banque\Compte as CompteB;
class CompteCourant extends CompteB
{
    private float $decouvertAutorise;

    public function __construct(string $nom, $prenom, float $soldeInitial = 100, float $decouvertAutorise = 500)
    {
        parent::__construct($nom, $prenom, $soldeInitial);
        $this->decouvertAutorise = $decouvertAutorise;
    }

    public function debiter(float $montant): void
    {
        if ($montant > 0) {
            if ($montant <= $this->getSolde() + $this->decouvertAutorise) {
                // Appel de la méthode debiter de la classe parente
                parent::debiter($montant);
            } else {
                echo "Dépassement du découvert autorisé.\n";
            }
        } else {
            echo "Le montant à débiter doit être positif.\n";
        }
    }

    public function getDecouvertAutorise(): float
    {
        return $this->decouvertAutorise;
    }

    public function setDecouvertAutorise(float $decouvertAutorise): void
    {
        if ($decouvertAutorise >= 0) {
            $this->decouvertAutorise = $decouvertAutorise;
        } else {
            echo "Le découvert autorisé doit être positif ou nul.\n";
        }
    }
}