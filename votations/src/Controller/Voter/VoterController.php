<?php

namespace App\Controller\Voter;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class VoterController extends AbstractController
{
    #[Route('/voter')]
    /**
     * @Route("/voter", name="voter")
     */
    public function index(): Response
    {
        $options = [
            'http' => [
                'header' => "Content-type: application/json",
                'method' => 'GET',
            ],
        ];

        // Récupérer le contenu du fichier JSON
        $context = stream_context_create($options);
        $json = file_get_contents('http://localhost:3000/api/candidats/', false, $context);

        if ($json === false) {
            // Gérer l'erreur de requête HTTP ici (par exemple, afficher un message d'erreur)
            return new Response('Erreur lors de la récupération des données des candidats.', 500);
        }
        $candidats = json_decode($json, true);

        // Rendu de la page Twig avec les résultats
        return $this->render('voter.html.twig', [
            'candidats' => $candidats,
            'nbCandidats' => count($candidats),
        ]);
    }
}
