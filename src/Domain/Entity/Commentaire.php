<?php

namespace Domain\Entity;

class Commentaire
{
    private $id;
    private $message;
    private $auteur;
    private $note;

    public function __construct(string $id = null, string $message = null, Auteur $auteur = null)
    {
        $this->id = $id;
        $this->message = $message;
        $this->auteur = $auteur;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur): void
    {
        $this->auteur = $auteur;
    }

    public function getNote(): Note
    {
        return $this->note;
    }

    public function setNote(Note $note): void
    {
        $this->note = $note;
    }
}
