<?php
namespace App\Banque;
use App\Client\Compte as CompteClient;

abstract class Compte
{
    private CompteClient $titulaire;
    
    private float $solde;

    function __construct(CompteClient $titulaire, float $soldeInitial = 100)
    {
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitial;
    }

    public function getTitulaire(): CompteClient
    {
        return $this->titulaire;
    }   

    public function setTitulaire(CompteClient $titulaire): void
    {
        $this->titulaire = $titulaire;
    }

    public function setTitulaire1(string $nom , string $prenom): void
    {
        $this->titulaire->setNom($nom);
        $this->titulaire->setPrenom($prenom);
    }

    public function getSolde(): float
    {
        return $this->solde;
    }   

    public function setSolde(float $solde): void
    {
        $this->solde = $solde;
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