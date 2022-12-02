<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
    // Home page
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAllPublished(3);

        return $this->render('content/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    // Articles
    #[Route('/article', name: 'app_article')]
    public function getArticles(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAllPublished();

        return $this->render('content/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    // Article
    #[Route('/article/{id}', name: 'app_article_show')]
    public function getProduct(Article $article): Response
    {
        return $this->render('content/article/article.html.twig', [
            'article' => $article,
        ]);
    }

// Products
}