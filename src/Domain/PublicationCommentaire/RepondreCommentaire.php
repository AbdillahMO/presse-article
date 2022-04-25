<?php

namespace Domain\PublicationCommentaire;

use Domain\Contract\CommentaireRepositoryInterface;
use Domain\Entity\Commentaire;

class RepondreCommentaire
{
    private $commentairesRepository;

    public function __construct(
        CommentaireRepositoryInterface $commentairesRepository
    ) {
        $this->commentairesRepository = $commentairesRepository;
    }

    public function Repondre(Commentaire $commentaire, Commentaire $response): void
    {
        $this->commentairesRepository->sauvegarder($commentaire);
    }
}
