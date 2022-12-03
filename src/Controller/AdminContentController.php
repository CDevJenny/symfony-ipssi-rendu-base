<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Product;
use App\Entity\User;
use App\Form\CategoryType;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
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

    // List Articles
    #[Route('/articles', name: 'app_admin_article_index')]
    public function articlesList(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAllPublished();

        return $this->render('admin/article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    // Show Article
    #[Route('/article/{id}', name: 'app_admin_article_show')]
    public function showArticle(Article $article): Response
    {
        return $this->render('admin/article/show.html.twig', [
            'article' => $article,
        ]);
    }

    // List Categories
    #[Route('/categories', name: 'app_admin_category_index', methods: ['GET'])]
    public function categoriesList(CategoryRepository $categoryRepository): Response
    {
        return $this->render('admin/category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    // Show Category
    #[Route('/category/{id}', name: 'app_admin_category_show', methods: ['GET'])]
    public function showCategory(Category $category): Response
    {
        return $this->render('admin/category/show.html.twig', [
            'category' => $category,
        ]);
    }

    // List Products
    #[Route('/products', name: 'app_admin_product_index', methods: ['GET'])]
    public function productsList(ProductRepository $productRepository): Response
    {
        return $this->render('admin/product/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    // Show Product
    #[Route('/product/{id}', name: 'app_admin_product_show', methods: ['GET'])]
    public function showProduct(Product $product): Response
    {
        return $this->render('admin/product/show.html.twig', [
            'product' => $product,
        ]);
    }

    // List Users
    #[Route('/users', name: 'app_admin_user_index', methods: ['GET'])]
    public function usersList(UserRepository $userRepository): Response
    {
        return $this->render('admin/user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    // Show User
    #[Route('/user/{id}', name: 'app_admin_user_show', methods: ['GET'])]
    public function showUser(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }
}
