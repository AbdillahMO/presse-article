<?php

namespace Tests\Domain\Repository;

use Domain\Contract\CommentaireRepositoryInterface;
use Domain\Entity\Commentaire;

class InMemorryCommentaireRepository implements CommentaireRepositoryInterface
{
    private $commentaires = [];

    public function sauvegarder(Commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;
    }

    public function toutRecuperer()
    {
        return $this->commentaires;
    }

    public function recupererUn(string $id)
    {
        $commentaire = null;
        foreach ($this->commentaires as $currentCommentaire) {
            if ($currentCommentaire->id == $id) {
                $commentaire = $currentCommentaire;
            }
        }
        return $commentaire;
    }

    public function derniersResponsesCommentaire()
    {
        return array_slice($this->commentaires, 0, 3);
    }
}
