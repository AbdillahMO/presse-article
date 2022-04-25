<?php

namespace Domain\Entity;

class Note
{
    private $id;
    private $valeur;

    public function __construct(string $id = null, int $valeur = null)
    {
        $this->valeur = $valeur;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function get(): int
    {
        return $this->valeur;
    }

    public function set(string $valeur): void
    {
        $this->valeur = $valeur;
    }
}
