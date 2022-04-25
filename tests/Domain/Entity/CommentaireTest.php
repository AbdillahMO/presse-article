<?php

namespace Tests\Domain\Entity;

use Domain\Entity\Commentaire;
use PHPUnit\Framework\TestCase;

class CommentaireTest extends TestCase
{
    public function testDevraitAssignerUnCommentaire()
    {
        $commentaire = new Commentaire();

        $commentaire->setMessage('Nouveau message');

        $this->assertEquals('Nouveau message', $commentaire->getMessage());
    }
}
