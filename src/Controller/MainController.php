<?php

namespace App\Controller;

use App\Model\SkillsModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/curriculum", name="curriculum")
     */
    public function curriculum(): Response
    {
        return $this->render('main/curriculum.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/downloadcv", name="download_cv")
     */
    public function download(): Response
    {
        // on force le téléchargement du calendrier
        return $this->file(__DIR__ . '/../../public/files/CV+Amélie+Sausseau.pdf');
    }

    /**
     * @Route("/skills", name="skills")
     */
    public function skills(SkillsModel $skills): Response
    {
        $allSkills = $skills->getAll();
    
        return $this->render('main/skills.html.twig', [
            'controller_name' => 'MainController',
            'all_skills' => $allSkills,
        ]);
    }
}
