<?php

namespace App\Entity;

use App\Repository\OeuvreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[ORM\Entity(repositoryClass:OeuvreRepository::class)]
class Oeuvre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:'integer')]
    private $id;

    #[ORM\Column(type: 'string',length: 255)]
    private $Titre;

    #[ORM\Column(type: 'text')]
    private $Description;

    private $File;

    #[ORM\Column(type: 'string',length: 255)]
    private $Lien;


    #[ORM\ManyToOne(targetEntity:Categorie::class, inversedBy:"Oeuvre")]
    private $categorie;

    #[ORM\Column(type: 'boolean')]
    private $slider;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $updated_at = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getFile()
    {
        return $this->File;
    }

    public function setFile(UploadedFile $File): self
    {
        $this->File = $File;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->Lien;
    }

    public function setLien(string $Lien): self
    {
        $this->Lien = $Lien;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getSlider(): ?bool
    {
        return $this->slider;
    }

    public function setSlider(bool $slider): self
    {
        $this->slider = $slider;

        return $this;
    }

    public function getWidth(): ?string
    {
        $width = getimagesize($this->Lien)[0];
        return $width;
    }

    public function getHeight(): ?string
    {
        $height = getimagesize($this->Lien)[1];
        return $height;
    }

    public function __toString()
    {
        return $this->Titre;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }

}
