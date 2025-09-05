<?php

namespace App\Entity;

use App\Repository\ExpositionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExpositionRepository::class)]
class Exposition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subTitle = null;

    /**
     * @var Collection<int, ExpositionWork>
     */
    #[ORM\OneToMany(mappedBy: 'exposition', targetEntity: ExpositionWork::class)]
    private Collection $works;

    public function __construct()
    {
        $this->works = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSubTitle(): ?string
    {
        return $this->subTitle;
    }

    public function setSubTitle(?string $subTitle): static
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    /**
     * @return Collection<int, expositionWork>
     */
    public function getWorks(): Collection
    {
        return $this->works;
    }

    public function addWork(expositionWork $work): static
    {
        if (!$this->works->contains($work)) {
            $this->works->add($work);
            $work->setExposition($this);
        }

        return $this;
    }

    public function removeWork(expositionWork $work): static
    {
        if ($this->works->removeElement($work)) {
            // set the owning side to null (unless already changed)
            if ($work->getExposition() === $this) {
                $work->setExposition(null);
            }
        }

        return $this;
    }
}
