<?php
namespace App\Client;

class Compte {
    private string $nom;
    private float $solde;

    public function __construct(string $nom, float $soldeInitial = 0) {
        $this->nom = $nom;
        $this->solde = $soldeInitial;
        echo "<hr> <br> Compte client créé pour $nom avec un solde initial de $soldeInitial.\n  <hr> <br>";
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getSolde(): float {
        return $this->solde;
    }

    public function deposer(float $montant): void {
        if ($montant > 0) {
            $this->solde += $montant;
        } else {
            echo "Le montant à déposer doit être positif.\n";
        }
    }

    public function retirer(float $montant): void {
        if ($montant > 0) {
            if ($montant <= $this->solde) {
                $this->solde -= $montant;
            } else {
                echo "Fonds insuffisants pour retirer ce montant.\n";
            }
        } else {
            echo "Le montant à retirer doit être positif.\n";
        }
    }
}
