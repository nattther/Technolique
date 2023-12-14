<?php

namespace App\Controller;
use App\Entity\Salle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SallesController extends AbstractController
{
    #[Route('/salles', name: 'app_salles')]
    public function index(): Response
    {
        $salles = $this->getDoctrine()->getRepository(Salle::class)->findBy([],['id' => 'desc']);
        return $this->render('index.html.twig', [
            'salles' => $salles,
        ]);
    }
}
