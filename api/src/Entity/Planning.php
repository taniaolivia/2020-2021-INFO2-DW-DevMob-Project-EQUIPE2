<?php

namespace App\Entity;

use App\Repository\PlanningRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PlanningRepository::class)
 */
class Planning
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("listePlanning")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Creneau::class, mappedBy="planning")
     * @Groups("listePlanning")
     */
    private $creneau;

    /**
     * @ORM\OneToOne(targetEntity=Bateau::class, inversedBy="planning", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups("listePlanning")
     */
    private $bateau;


    public function __construct()
    {
        $this->creneau = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Creneau[]
     */
    public function getCreneau(): Collection
    {
        return $this->creneau;
    }

    public function addCreneau(Creneau $creneau): self
    {
        if (!$this->creneau->contains($creneau)) {
            $this->creneau[] = $creneau;
            $creneau->setPlanning($this);
        }

        return $this;
    }

    public function removeCreneau(Creneau $creneau): self
    {
        if ($this->creneau->removeElement($creneau)) {
            // set the owning side to null (unless already changed)
            if ($creneau->getPlanning() === $this) {
                $creneau->setPlanning(null);
            }
        }

        return $this;
    }

    public function getBateau(): ?Bateau
    {
        return $this->bateau;
    }

    public function setBateau(Bateau $bateau): self
    {
        $this->bateau = $bateau;

        return $this;
    }


}
