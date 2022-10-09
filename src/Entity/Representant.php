<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\RepresentantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RepresentantRepository::class)]
#[ApiResource]
class Representant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nomRepresentant = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entiteARepresentant = null;

    #[ORM\ManyToOne]
    private ?EcoleDoctorale $ecoleDoctoraleId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRepresentant(): ?string
    {
        return $this->nomRepresentant;
    }

    public function setNomRepresentant(string $nomRepresentant): self
    {
        $this->nomRepresentant = $nomRepresentant;

        return $this;
    }

    public function getEntiteARepresentant(): ?string
    {
        return $this->entiteARepresentant;
    }

    public function setEntiteARepresentant(?string $entiteARepresentant): self
    {
        $this->entiteARepresentant = $entiteARepresentant;

        return $this;
    }

    public function getEcoleDoctoraleId(): ?EcoleDoctorale
    {
        return $this->ecoleDoctoraleId;
    }

    public function setEcoleDoctoraleId(?EcoleDoctorale $ecoleDoctoraleId): self
    {
        $this->ecoleDoctoraleId = $ecoleDoctoraleId;

        return $this;
    }
}
