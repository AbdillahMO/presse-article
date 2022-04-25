<?php

namespace Tests\Domain\Entity;

use Domain\Entity\Commentaire;
use Domain\PublicationCommentaire\RepondreCommentaire;
use PHPUnit\Framework\TestCase;
use Tests\Domain\Repository\InMemorryCommentaireRepository;

class CreerCommentaireTest extends TestCase
{
    public function testDevraitCreerUneReponseCommentaireDansRepository()
    {
        $commentaire = new Commentaire(null, "un message");
        $reponse = new Commentaire(null, "une reponse");
        $repository = new InMemorryCommentaireRepository();
        $actionAjouter = new RepondreCommentaire($repository);

        $actionAjouter->Repondre($commentaire, $reponse);

        dd($repository->toutRecuperer());

        $this->assertEquals(1, count($repository->toutRecuperer()));
    }
}
