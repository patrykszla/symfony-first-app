<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    #[Route('/articles', 'blod-articles')]
    public function mainPage(): Response 
    {
        return new Response(content: 'Tu będzie główna strona z artykułami');
    }
}