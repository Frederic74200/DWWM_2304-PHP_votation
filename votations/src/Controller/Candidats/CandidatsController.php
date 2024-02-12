<?php

namespace App\Controller\Candidats;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CandidatsController extends AbstractController
{
    #[Route('/candidats')]
    /**
     * @Route("/candidats", name="candidats")
     */
    public function index(): Response
    {
        // Récupérer les résultats des 5 derniers matchs de volley


        $json = file_get_contents('../public/assets/candidats/candidats.json');
        $candidats = json_decode($json,  true);

        // Rendu de la page Twig avec les résultats
        return $this->render('candidats.html.twig', [
            'candidats' => $candidats,
            'nbCandidats' => count($candidats),
        ]);
    }
}
