<?php

namespace Tests\Domain\Repository;

use Domain\Contract\ArticleRepositoryInterface;
use Domain\Entity\Article;

class InMemorryArticleRepository implements ArticleRepositoryInterface
{
    private $articles = [];

    public function sauvegarder(Article $article)
    {
        $this->articles[] = $article;
    }

    public function toutRecuperer()
    {
        return $this->articles;
    }

    public function recupererUn(string $id)
    {
        $article = null;
        foreach ($this->articles as $currentArticle) {
            if ($currentArticle->getId() == $id) {
                $article = $currentArticle;
            }
        }
        return $article;
    }

    public function dernierCommentaire(string $idArticle)
    {
        $article = $this->recupererUn($idArticle);
        if (null === $article) return null;

        if (0 === count($article->getCommentaires())) return null;

        return $article->getCommentaires()[count($article->getCommentaires()) - 1];
    }
}
