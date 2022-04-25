<?php

namespace Tests\Domain\Entity;

use Domain\Entity\Note;
use PHPUnit\Framework\TestCase;

class NoteTest extends TestCase
{
    public function testDevraitAssignerUnNote()
    {
        $note = new Note();

        $note->set(1);

        $this->assertEquals(1, $note->get());
    }
}
