<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\UniteTransversaleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UniteTransversaleRepository::class)]
#[ApiResource]
class UniteTransversale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $intituleUniteTransversale = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $responsableUniteTransversale = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $volumeHoraire = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $typeUniteTransversale = null;

    #[ORM\ManyToOne]
    private ?EcoleDoctorale $ecoleDoctoraleId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntituleUniteTransversale(): ?string
    {
        return $this->intituleUniteTransversale;
    }

    public function setIntituleUniteTransversale(string $intituleUniteTransversale): self
    {
        $this->intituleUniteTransversale = $intituleUniteTransversale;

        return $this;
    }

    public function getResponsableUniteTransversale(): ?string
    {
        return $this->responsableUniteTransversale;
    }

    public function setResponsableUniteTransversale(?string $responsableUniteTransversale): self
    {
        $this->responsableUniteTransversale = $responsableUniteTransversale;

        return $this;
    }

    public function getVolumeHoraire(): ?string
    {
        return $this->volumeHoraire;
    }

    public function setVolumeHoraire(?string $volumeHoraire): self
    {
        $this->volumeHoraire = $volumeHoraire;

        return $this;
    }

    public function getTypeUniteTransversale(): ?string
    {
        return $this->typeUniteTransversale;
    }

    public function setTypeUniteTransversale(?string $typeUniteTransversale): self
    {
        $this->typeUniteTransversale = $typeUniteTransversale;

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
