<?php
namespace App\Banque;
abstract class Compte
{
    private string $titulaire;
    
    private float $solde;

    function __construct(string $titulaire, float $soldeInitial = 100)
    {
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitial;
    }

    public function getTitulaire(): string
    {
        return $this->titulaire;
    }   

    public function getSolde(): float
    {
        return $this->solde;
    }   

    public function crediter(float $montant): void
    {
        if ($montant > 0) {
            $this->solde += $montant;
        } else {
            echo "Le montant à créditer doit être positif.\n";
        }
    }

    public function debiter(float $montant): void
    {
        if ($montant > 0) {
            if ($montant <= $this->solde) {
                $this->solde -= $montant;
            } else {
                echo "Fonds insuffisants pour débiter ce montant.\n";
            }
        } else {
            echo "Le montant à débiter doit être positif.\n";
        }
    }



}