<?php

namespace Tests\Domain\Entity;

use Domain\Entity\Article;
use Domain\Entity\Auteur;
use Domain\Entity\Commentaire;
use Domain\PublicationCommentaire\CreerCommentaire;
use PHPUnit\Framework\TestCase;
use Tests\Domain\Repository\InMemorryCommentaireRepository;

class CreerCommentaireTest extends TestCase
{
    public function testDevraitCreerUnCommentaireDansRepository()
    {
        $auteur = new Auteur(null, "Bob");
        $article = new Article(null, "un article", "contenu");
        $commentaire = new Commentaire(null, "message", $auteur);
        $repository = new InMemorryCommentaireRepository();
        $actionAjouter = new CreerCommentaire($repository);

        $actionAjouter->creer($commentaire, $article);

        $this->assertEquals(1, count($repository->toutRecuperer()));
    }
}
