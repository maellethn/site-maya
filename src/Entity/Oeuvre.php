<?php

namespace App\Entity;

use App\Repository\OeuvreRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity(repositoryClass=OeuvreRepository::class)
 */
class Oeuvre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

   
    private $File;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Lien;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="Oeuvre")
     */
    private $categorie;

    /**
     * @ORM\Column(type="boolean")
     */
    private $slider;


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

}
