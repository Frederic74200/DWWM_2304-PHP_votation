<?php

namespace App\Controller\Voter;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class VoterController extends AbstractController
{
    #[Route('/voter')]
    public function index(): Response
    {


        return $this->render('voter.html.twig');
    }
}
