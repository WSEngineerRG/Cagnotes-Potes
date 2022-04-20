<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(ManagerRegistry $managerRegistry): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'campaigns' => $managerRegistry->getRepository('App:Campaign')->findAll(),
        ]);
    }
}
