<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminContentController extends AbstractController
{
    // Admin Dashboard
    #[Route('', name: 'app_admin_dashboard')]
    public function index(): Response
    {
        if($this->getUser()->getRoles() == ['ROLE_ADMIN']) {
            return $this->render('admin/dashboard.html.twig', [
                'admin' => $this->getUser(),
            ]);
        }

        return $this->redirectToRoute('app_home');

    }

    // List Categories
    #[Route('/categories', name: 'app_admin_category_index', methods: ['GET'])]
    public function categoryList(CategoryRepository $categoryRepository): Response
    {
        return $this->render('admin/category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    // Show Category
    #[Route('/category/{id}', name: 'app_admin_category_show', methods: ['GET'])]
    public function show(Category $category): Response
    {
        return $this->render('admin/category/show.html.twig', [
            'category' => $category,
        ]);
    }

    // List Articles
    #[Route('/articles', name: 'app_article_index', methods: ['GET'])]
    public function getArticles(ArticleRepository $articleRepository): Response
    {

        return $this->render('content/dashboard.html.twig', [
            'articles' => $articleRepository->findAllPublished(),
        ]);
    }
}
