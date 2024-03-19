<?php

namespace App\Controller;

use App\Repository\InformationAboutMeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutMePageController extends AbstractController
{
    public function __construct(
        private InformationAboutMeRepository $informationAboutMeRepository
    )
    {
    }
    #[Route('/about-me', name: 'about-me')]
    public function index(): Response
    {
        $informations = $this->informationAboutMeRepository->findAll();
        // dd($informations);
        return $this->render('about_me_page/index.html.twig', ['informations' => $informations]);
    }
}
