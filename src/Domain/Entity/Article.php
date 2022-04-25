<?php

namespace Domain\Entity;

class Article
{
    private $id;
    private $nom;
    private $contenu;
    private $commentaires;

    public function __construct(
        string $id = null,
        string $nom = null,
        string $contenu = null,
        array $commentaires = null
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->contenu = $contenu;
        $this->commentaires = $commentaires;
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

    public function getContenu(): string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): void
    {
        $this->contenu = $contenu;
    }

    public function getCommentaires()
    {
        return $this->commentaires;
    }

    public function setCommentaires(array $commentaires): void
    {
        $this->commentaires = $commentaires;
    }

    /**
     * Asssocie un commentaire à l'article
     * @param string $commentaire le commentaire à associé
     */
    public function assignerCommentaire(Commentaire $commentaire): void
    {
        $this->commentaires[] = $commentaire;
    }
}
