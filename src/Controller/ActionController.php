<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use DateTimeImmutable;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActionController extends AbstractController
{
    // Create Article
    #[Route('/article/create', name: 'app_article_create', methods: ['GET', 'POST'])]
    public function createArticle(Request $request, ArticleRepository $articleRepository): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        $user = $this->getUser();

        if ($form->isSubmitted() && $form->isValid()) {
            $isPublished = (bool) $form['isPublished']->getData();

            $article->setAuthor($user);
            $article->setIsPublished($isPublished);
            $article->setCreatedAt(new DateTimeImmutable('now'));
            $articleRepository->save($article, true);

            return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('content/article/create.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/article/edit/{id}', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function editProduct(Request $request, int $id, ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->find($id);
        if (!$article instanceof Article) {
            return $this->redirectToRoute('app_article', [], Response::HTTP_SEE_OTHER);
        }

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $isPublished = (bool) $form['isPublished']->getData();


            $article->setUpdatedAt(new DateTimeImmutable('now'));
            $article->setIsPublished($isPublished);
            $articleRepository->save($article, true);

            return $this->redirectToRoute('app_article_show', ["id" => $article->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('content/article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/article/delete/{id}', name: 'app_article_delete', methods: ['GET', 'POST'])]
    public function deleteArticle(int $id, ArticleRepository $articleRepository)
    {
        $article = $articleRepository->find($id);
        if ($article instanceof Article) {
            $articleRepository->remove($article, true);
        }

        return $this->redirectToRoute('app_article');
    }
}