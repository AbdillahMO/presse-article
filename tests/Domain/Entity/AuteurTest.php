<?php

namespace Tests\Domain\Entity;

use Domain\Entity\Auteur;
use PHPUnit\Framework\TestCase;

class AuteurTest extends TestCase
{
    public function testDevraitAssignerUnNomAuteur()
    {
        $auteur = new Auteur();

        $auteur->setNom("Bob");

        $this->assertEquals("Bob", $auteur->getNom());
    }

    public function testDevraitAssignerUneImageAuteur()
    {
        $auteur = new Auteur();

        $auteur->setimage("test.png");

        $this->assertEquals("test.png", $auteur->getimage());
    }
}
