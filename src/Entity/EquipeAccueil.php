<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\EquipeAccueilRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipeAccueilRepository::class)]
#[ApiResource]
class EquipeAccueil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $intituleEquipeAccueil = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $responsableEquipeAccueil = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $centreLaboratoire = null;

    #[ORM\ManyToOne]
    private ?EcoleDoctorale $ecoleDoctoraleId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntituleEquipeAccueil(): ?string
    {
        return $this->intituleEquipeAccueil;
    }

    public function setIntituleEquipeAccueil(string $intituleEquipeAccueil): self
    {
        $this->intituleEquipeAccueil = $intituleEquipeAccueil;

        return $this;
    }

    public function getResponsableEquipeAccueil(): ?string
    {
        return $this->responsableEquipeAccueil;
    }

    public function setResponsableEquipeAccueil(?string $responsableEquipeAccueil): self
    {
        $this->responsableEquipeAccueil = $responsableEquipeAccueil;

        return $this;
    }

    public function getCentreLaboratoire(): ?string
    {
        return $this->centreLaboratoire;
    }

    public function setCentreLaboratoire(?string $centreLaboratoire): self
    {
        $this->centreLaboratoire = $centreLaboratoire;

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
