<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/kroon", name="kroon")
     */
    public function kroon(): Response
    {
        return $this->render('projects/kroon.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }
}
