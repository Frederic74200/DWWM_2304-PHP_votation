<?php 

require_once 'Moteur.php';

require_once 'Voiture.php';

$moteur = new Moteur();

$voiture = new Voiture('toto', '240', 1000, new Moteur()); // composition

$voiture2 = new Voiture('toto', '240', 1000, $moteur); // aggregation

var_export($voiture);