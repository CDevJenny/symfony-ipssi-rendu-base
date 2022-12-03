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
        return $this->render('content/index.html.twig', [
            'articles' => $articleRepository->findAllPublished(3),
        ]);
    }

    // List Articles
    #[Route('/articles', name: 'app_article_index')]
    public function getArticles(ArticleRepository $articleRepository): Response
    {
        return $this->render('content/article/index.html.twig', [
            'articles' => $articleRepository->findAllPublished(),
        ]);
    }

    // Show Article
    #[Route('/article/{id}', name: 'app_article_show')]
    public function getArticle(int $id, ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->find($id);
        if (!$article instanceof Article) {
            return $this->redirectToRoute('app_article');
        }

        return $this->render('content/article/show.html.twig', [
            'article' => $article,
        ]);
    }

// Products
}