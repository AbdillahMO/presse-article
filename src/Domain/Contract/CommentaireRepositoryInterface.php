<?php

namespace Domain\Contract;

use Domain\Entity\Commentaire;

interface CommentaireRepositoryInterface
{
    public function sauvegarder(Commentaire $commentaire);
    public function toutRecuperer();
    public function recupererUn(string $id);
    public function derniersResponsesCommentaire();
}
