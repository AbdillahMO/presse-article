<?php

namespace Domain\PublicationArticle;

use Domain\Contract\ArticleRepositoryInterface;
use Domain\Entity\Article;

class AjouterArticle
{
    private $articlesRepository;

    public function __construct(ArticleRepositoryInterface $articlesRepository)
    {
        $this->articlesRepository = $articlesRepository;
    }

    public function creer(Article $article): void
    {
        $this->articlesRepository->sauvegarder($article);
    }
}
