<?php

use App\Router;

// Chargement de l'autoloader de Composer
require (dirname(__DIR__) . '/vendor/autoload.php');

// Création du Routeur
$router = new Router();

// Invocation de la méthode run du routeur
$router->run();
