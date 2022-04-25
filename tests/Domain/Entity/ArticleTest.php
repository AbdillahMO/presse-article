<?php

namespace Tests\Domain\Entity;

use Domain\Entity\Article;
use Domain\Entity\Auteur;
use Domain\Entity\Commentaire;
use Domain\PublicationArticle\AjouterArticle;
use Domain\PublicationCommentaire\CreerCommentaire;
use PHPUnit\Framework\TestCase;
use Tests\Domain\Repository\InMemorryArticleRepository;
use Tests\Domain\Repository\InMemorryCommentaireRepository;

class ArticleTest extends TestCase
{
    public function testDevraitAssignerUnNomArticle()
    {
        $article = new Article();

        $article->setNom("Un nom");

        $this->assertEquals("Un nom", $article->getNom());
    }

    public function testDevraitAssignerUnContenuArticle()
    {
        $article = new Article();

        $article->setContenu("un contenu");

        $this->assertEquals("un contenu", $article->getContenu());
    }

    public function testDevraitRecupererUnContenuArticle()
    {
        $article = new Article();

        $article->setContenu("un contenu");

        $this->assertEquals("un contenu", $article->getContenu());
    }

    public function testDevraitRecupererLeDernierCommentaire()
    {
        $idCommentaire = uniqid();
        $commentaireRepository = new InMemorryCommentaireRepository();
        $articleRepository = new InMemorryArticleRepository();
        $article = new Article(uniqid());
        $auteur = new Auteur(null, "Bob");

        // Sauvegarde des commentaires
        $commentaire = new Commentaire(uniqid(), "un message", $auteur);
        $creerCommentaire = new CreerCommentaire($commentaireRepository);
        $creerCommentaire->creer($commentaire, $article);

        $commentaire = new Commentaire($idCommentaire, "Message 2", $auteur);
        $creerCommentaire = new CreerCommentaire($commentaireRepository);
        $creerCommentaire->creer($commentaire, $article);

        // sauvegarde des infos de l'article
        $actionAjoutArticle = new AjouterArticle($articleRepository);
        $actionAjoutArticle->creer($article);

        $commentaire = $articleRepository->dernierCommentaire($article->getId());

        $this->assertEquals($commentaire->getId(), $idCommentaire);
    }
}
