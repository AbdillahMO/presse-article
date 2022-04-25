<?php

namespace Domain\Contract;

use Domain\Entity\Article;

interface ArticleRepositoryInterface
{
    public function sauvegarder(Article $article);
    public function toutRecuperer();
    public function recupererUn(string $id);
    public function dernierCommentaire(string $idArticle);
}
