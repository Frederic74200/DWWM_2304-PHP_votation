<?php 

require_once 'Moteur.php';

class Voiture 
{
    private string $marque;
    private string $modele;
    private string $poids;
    private Moteur $moteur;

    public function __construct(string $marque, string $modele, int $poids, Moteur $monMoteur)
    {
        $this->moteur = $monMoteur;
    }
}
