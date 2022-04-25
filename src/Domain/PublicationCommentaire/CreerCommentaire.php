<?php

namespace Domain\PublicationCommentaire;

use Domain\Contract\CommentaireRepositoryInterface;
use Domain\Entity\Article;
use Domain\Entity\Commentaire;

class CreerCommentaire
{
    private $commentairesRepository;

    public function __construct(
        CommentaireRepositoryInterface $commentairesRepository
    ) {
        $this->commentairesRepository = $commentairesRepository;
    }

    public function creer(Commentaire $commentaire, Article $article): void
    {
        $article->assignerCommentaire($commentaire);
        $this->commentairesRepository->sauvegarder($commentaire);
    }
}
