<?php

namespace Domain\Entity;

class Auteur
{
    private $id;
    private $nom;
    private $image;

    public function __construct(string $id = null, string $nom = null, string $image = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->image = $image;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}
