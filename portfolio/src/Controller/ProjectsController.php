<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/projets", name="projects")
     */
    public function projects(): Response
    {
        return $this->render('projects/index.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    } 

    /**
     * @Route("/kroon", name="kroon")
     */
    public function kroon(): Response
    {
        return $this->render('projects/kroon.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }

    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio(): Response
    {
        return $this->render('projects/portfolio.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }
}
