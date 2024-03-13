<?php
namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use App\Service\ArticleProvider;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    public function __construct(
        private ArticleRepository $articleRepository,
        private ArticleProvider $articleProvider
    )
    {
        
    }

    #[Route('/articles', 'blog-articles')]
    public function showArticles(): Response 
    {
        $articles = $this->articleRepository->findAll();
        $parameters = [];
        if ($articles) {
            $parameters = $this->articleProvider->transformDataForTwig($articles);
        }
        $articles = $parameters;

        return $this->render( view: 'articles/articles.html.twig', parameters: $parameters );
    }

    #[Route('/article/{article}', 'blog-article')]
    public function showArticle(Article $article) : Response 
    {   
        // dd($article);
        // return new Response(content: $articleId);
        $parameters = [];
        $parameters['article'] = $article;
        return $this->render('articles/article.html.twig', $parameters);
    }

}