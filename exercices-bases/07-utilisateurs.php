<?php 

$users = [
    'joe' => 'Azer1234!', 
    'jack' => 'Azer-4321', 
    'admin' => '1234_Azer',
];

$nomDutilisateur = "joe";
$motDePasseAtester = "Azer1234!";

// si le tableau d'utilisateurs contient "$nomDutilisateur"
if(array_key_exists($nomDutilisateur, $users)) {
    $utilisateur = $users[$nomDutilisateur];
}