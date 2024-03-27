<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Service\ArticleProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainPageController extends AbstractController
{
    public function __construct(
        private ArticleRepository $articleRepository,
        private ArticleProvider $articleProvider
    ) {
    }

    #[Route('/', name: 'main-page')]
    public function index(): Response
    {
        $parameters = [
            // 'lastArticle' => $this->articleRepository->getLastArticle(),
            'lastArticle' => $this->articleProvider->prepareOneArticle($this->articleRepository->getLastArticle())
        ];

        // dd($parameters);

        return $this->render(
            'main_page/index.html.twig',
            $parameters
        );
    }
}
