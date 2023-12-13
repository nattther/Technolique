<?php

namespace App\Entity;

use App\Repository\BadgeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BadgeRepository::class)]
class Badge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Image = null;

    #[ORM\Column]
    private ?int $Année = null;

    #[ORM\Column]
    private ?int $Adhérent = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): static
    {
        $this->Image = $Image;

        return $this;
    }

    public function getAnnée(): ?int
    {
        return $this->Année;
    }

    public function setAnnée(int $Année): static
    {
        $this->Année = $Année;

        return $this;
    }

    public function getAdhérent(): ?int
    {
        return $this->Adhérent;
    }

    public function setAdhérent(int $Adhérent): static
    {
        $this->Adhérent = $Adhérent;

        return $this;
    }
}
