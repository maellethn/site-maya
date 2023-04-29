<?php

namespace App\Entity;

use App\Repository\AcceuilRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AcceuilRepository::class)
 */
class Acceuil
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\OneToOne(targetEntity=Oeuvre::class,cascade={"persist", "remove"})
     */
    private $Oeuvre;

    /**
     * @ORM\OneToOne(targetEntity=Categorie::class, cascade={"persist", "remove"})
     */
    private $puzzle_collection;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(?string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getOeuvre(): ?Oeuvre
    {
        return $this->Oeuvre;
    }

    public function setOeuvre(?Oeuvre $Oeuvre): self
    {
        $this->Oeuvre = $Oeuvre;

        return $this;
    }

    public function getPuzzleCollection(): ?Categorie
    {
        return $this->puzzle_collection;
    }

    public function setPuzzleCollection(?Categorie $puzzle_collection): self
    {
        $this->puzzle_collection = $puzzle_collection;

        return $this;
    }
}
