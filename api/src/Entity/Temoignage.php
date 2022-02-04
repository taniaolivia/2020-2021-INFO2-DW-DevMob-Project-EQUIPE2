<?php

namespace App\Entity;

use App\Repository\TemoignageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TemoignageRepository::class)
 */
class Temoignage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("listeTemoignages")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups("listeBateaux","listeTemoignages")
     */
    private $auteur;

    /**
     * @ORM\Column(type="text")
     * @Groups("listeBateaux","listeTemoignages")

     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("listeBateaux","listeTemoignages")
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("listeTemoignages")
     */
    private $audio;

    /**
     * @ORM\ManyToOne(targetEntity=Bateau::class, inversedBy="temoignages")
     * @ORM\JoinColumn(nullable=false)
     * @Groups("listeTemoignages")
     */
    private $bateauTemoignages;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getAudio(): ?string
    {
        return $this->audio;
    }

    public function setAudio(?string $audio): self
    {
        $this->audio = $audio;

        return $this;
    }

    public function getBateauTemoignages(): ?Bateau
    {
        return $this->bateauTemoignages;
    }

    public function setBateauTemoignages(?Bateau $bateauTemoignages): self
    {
        $this->bateauTemoignages = $bateauTemoignages;

        return $this;
    }

}
