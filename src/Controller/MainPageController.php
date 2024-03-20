<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainPageController extends AbstractController
{
    public function __construct(
        private ArticleRepository $articleRepository
    ) 
    {

    }
 
    #[Route('/', name: 'main-page')]
    public function index(): Response
    {
        $parameters = [
            'lastArticle' => $this->articleRepository->getLastArticle(),
        ];
        
        // dd($parameters);

        return $this->render('main_page/index.html.twig', $parameters
        );
    }
}
