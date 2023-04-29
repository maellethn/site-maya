<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Query\Expr;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
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
     * @ORM\OneToMany(targetEntity=Oeuvre::class, mappedBy="categorie")
     */
    private $Oeuvre;

    /**
     * @ORM\ManyToOne(targetEntity=Couleur::class, inversedBy="categories")
     */
    private $Couleur;

    /**
     * @ORM\Column(type="boolean")
     */
    private $public;

    public function __construct()
    {
        $this->Oeuvre = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->Titre;
    }

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

    /**
     * @return Collection|Oeuvre[]
     */
    public function getOeuvre(): Collection
    {
        return $this->Oeuvre;
    }

    public function addOeuvre(Oeuvre $oeuvre): self
    {
        if (!$this->Oeuvre->contains($oeuvre)) {
            $this->Oeuvre[] = $oeuvre;
            $oeuvre->setCategorie($this);
        }

        return $this;
    }

    public function removeOeuvre(Oeuvre $oeuvre): self
    {
        if ($this->Oeuvre->removeElement($oeuvre)) {
            // set the owning side to null (unless already changed)
            if ($oeuvre->getCategorie() === $this) {
                $oeuvre->setCategorie(null);
            }
        }

        return $this;
    }

    public function getCouleur(): ?Couleur
    {
        return $this->Couleur;
    }

    public function setCouleur(?Couleur $Couleu): self
    {
        $this->Couleur = $Couleu;

        return $this;
    }

    public function getPublic(): ?bool
    {
        return $this->public;
    }

    public function setPublic(bool $public): self
    {
        $this->public = $public;

        return $this;
    }
}
