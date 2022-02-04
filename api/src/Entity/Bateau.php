<?php

namespace App\Entity;

use App\Repository\BateauRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=BateauRepository::class)
 * @UniqueEntity(
 *     fields={"nomunique"},
 *     errorPath="nomunique",
 *     message="nomunique existe dans la base de données."
 * )
 */
class Bateau
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("listeBateaux")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     * @Groups("listeBateaux", "listePlanning", "listeTemoignages")
     */
    private $nomunique;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups("listeBateaux", "listePlanning", "listeTemoignages")
     */
    private $nom;

    /**
     * @ORM\Column(type="text")
     * @Groups("listeBateaux")
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     * @Groups("listeBateaux")
     */
    private $lon;

    /**
     * @ORM\Column(type="float")
     * @Groups("listeBateaux")
     */
    private $lat;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("listeBateaux")
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity=Temoignage::class, mappedBy="bateauTemoignages")
     * @Groups("listeBateaux")
     */
    private $temoignages;

    /**
     * @ORM\Column(type="boolean")
     * @Groups("listeBateaux")
     */
    private $visitable;

    /**
     * @ORM\OneToOne(targetEntity=Planning::class, mappedBy="bateau", cascade={"persist", "remove"})
     * @Groups("listeBateaux")
     */
    private $planning;


    public function __construct()
    {
        $this->temoignages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomunique(): ?string
    {
        return $this->nomunique;
    }

    public function setNomunique(string $nomunique): self
    {
        $this->nomunique = $nomunique;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLon(): ?float
    {
        return $this->lon;
    }

    public function setLon(float $lon): self
    {
        $this->lon = $lon;

        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Collection|Temoignage[]
     */
    public function getTemoignages(): Collection
    {
        return $this->temoignages;
    }

    public function addTemoignage(Temoignage $temoignage): self
    {
        if (!$this->temoignages->contains($temoignage)) {
            $this->temoignages[] = $temoignage;
            $temoignage->setBateauTemoignages($this);
        }

        return $this;
    }

    public function removeTemoignage(Temoignage $temoignage): self
    {
        if ($this->temoignages->removeElement($temoignage)) {
            // set the owning side to null (unless already changed)
            if ($temoignage->getBateauTemoignages() === $this) {
                $temoignage->setBateauTemoignages(null);
            }
        }

        return $this;
    }

    public function getVisitable(): ?bool
    {
        return $this->visitable;
    }

    public function setVisitable(bool $visitable): self
    {
        $this->visitable = $visitable;

        return $this;
    }

    public function getPlanning(): ?Planning
    {
        return $this->planning;
    }

    public function setPlanning(Planning $planning): self
    {
        $this->planning = $planning;
        return $this;
    }


}
