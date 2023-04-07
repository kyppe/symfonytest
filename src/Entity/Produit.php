<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 15)]
    private ?string $ref = null;

    #[ORM\Column(length: 255)]
    private ?string $designaton = null;

    #[ORM\Column]
    private ?float $prix_unit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getDesignaton(): ?string
    {
        return $this->designaton;
    }

    public function setDesignaton(string $designaton): self
    {
        $this->designaton = $designaton;

        return $this;
    }

    public function getPrixUnit(): ?float
    {
        return $this->prix_unit;
    }

    public function setPrixUnit(float $prix_unit): self
    {
        $this->prix_unit = $prix_unit;

        return $this;
    }
}
