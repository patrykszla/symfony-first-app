<?php
namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    public function __construct(
        private ArticleRepository $articleRepository
    )
    {
        
    }

    #[Route('/articles', 'blog-articles')]
    public function showArticles(): Response 
    {
        $articles = $this->articleRepository->findAll();
        // dump ( var: $articles );
        // dd( vars: $articles );
        // return new Response(content: 'Tu będzie główna strona z artykułami');

        $parameters = array(
            'articles' => $articles,
        );

        return $this->render( view: 'articles.html.twig', parameters: $parameters );
    }

    #[Route('/article/{article}', 'blog-article')]
    public function showArticle(Article $article) : Response 
    {   
        dd($article);
        // return new Response(content: $articleId);
    }

}