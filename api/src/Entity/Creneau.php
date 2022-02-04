<?php

namespace App\Entity;

use App\Repository\CreneauRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=CreneauRepository::class)
 */
class Creneau
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("getCreneau")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Groups("listePlanning", "getCreneau")
     */
    private $nbPlaceMax;

    /**
     * @ORM\Column(type="integer")
     * @Groups("listePlanning", "getCreneau")
     */
    private $nbPlaceRestante;

    /**
     * @ORM\Column(type="datetime")
     * @Groups("listePlanning", "getCreneau")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="creneau")
     */
    private $reservations;

    /**
     * @ORM\ManyToOne(targetEntity=Planning::class, inversedBy="creneau")
     * @ORM\JoinColumn(nullable=false)
     */
    private $planning;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbPlaceMax(): ?int
    {
        return $this->nbPlaceMax;
    }

    public function setNbPlaceMax(int $nbPlaceMax): self
    {
        $this->nbPlaceMax = $nbPlaceMax;

        return $this;
    }

    public function getNbPlaceRestante(): ?int
    {
        return $this->nbPlaceRestante;
    }

    public function setNbPlaceRestante(int $nbPlaceRestante): self
    {
        $this->nbPlaceRestante = $nbPlaceRestante;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setCreneau($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getCreneau() === $this) {
                $reservation->setCreneau(null);
            }
        }

        return $this;
    }


    public function getPlanning(): ?Planning
    {
        return $this->planning;
    }

    public function setPlanning(?Planning $planning): self
    {
        $this->planning = $planning;

        return $this;
    }

}
