<?php

namespace App\Controller;

use App\Repository\CampaignRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CampaignRepository $repository): Response
    {
        $campaigns = $repository->findAll();
        // dd($campaigns);
        return $this->render('index.html.twig', [
            'campaigns' => $campaigns,
        ]);
    }

    #[Route('/create', name: 'create')]
    public function create(): Response
    {
        return $this->render('create.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/payment', name: 'payment')]
    public function payment(): Response
    {
        return $this->render('payment.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/show', name: 'show')]
    public function show(): Response
    {
        return $this->render('show.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
