<?php

namespace App\Entity;

use App\Repository\BadgesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BadgesRepository::class)]
class Badges
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Images = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NombreParticipants = null;

    #[ORM\Column(length: 64)]
    private ?string $mois = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImages(): ?string
    {
        return $this->Images;
    }

    public function setImages(string $Images): static
    {
        $this->Images = $Images;

        return $this;
    }

    public function getNombreParticipants(): ?string
    {
        return $this->NombreParticipants;
    }

    public function setNombreParticipants(?string $NombreParticipants): static
    {
        $this->NombreParticipants = $NombreParticipants;

        return $this;
    }

    public function getMois(): ?string
    {
        return $this->mois;
    }

    public function setMois(string $mois): static
    {
        $this->mois = $mois;

        return $this;
    }
}
