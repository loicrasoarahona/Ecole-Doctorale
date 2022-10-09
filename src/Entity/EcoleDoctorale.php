<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\EcoleDoctoraleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EcoleDoctoraleRepository::class)]
#[ApiResource]
class EcoleDoctorale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomEcoleDoctorale = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $domaineEcoleDoctorale = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $directeurEcoleDoctorale = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $typeEcoleDoctorale = null;

    #[ORM\ManyToOne(inversedBy: 'ecoleDoctorales')]
    private ?Institution $institutions = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $arreteMiseEnPlace = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateArreteMiseEnPlace = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $departements = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateOuverture = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $notePresentation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEcoleDoctorale(): ?string
    {
        return $this->nomEcoleDoctorale;
    }

    public function setNomEcoleDoctorale(string $nomEcoleDoctorale): self
    {
        $this->nomEcoleDoctorale = $nomEcoleDoctorale;

        return $this;
    }

    public function getDomaineEcoleDoctorale(): ?string
    {
        return $this->domaineEcoleDoctorale;
    }

    public function setDomaineEcoleDoctorale(?string $domaineEcoleDoctorale): self
    {
        $this->domaineEcoleDoctorale = $domaineEcoleDoctorale;

        return $this;
    }

    public function getDirecteurEcoleDoctorale(): ?string
    {
        return $this->directeurEcoleDoctorale;
    }

    public function setDirecteurEcoleDoctorale(?string $directeurEcoleDoctorale): self
    {
        $this->directeurEcoleDoctorale = $directeurEcoleDoctorale;

        return $this;
    }

    public function getTypeEcoleDoctorale(): ?string
    {
        return $this->typeEcoleDoctorale;
    }

    public function setTypeEcoleDoctorale(?string $typeEcoleDoctorale): self
    {
        $this->typeEcoleDoctorale = $typeEcoleDoctorale;

        return $this;
    }

    public function getInstitutions(): ?Institution
    {
        return $this->institutions;
    }

    public function setInstitutions(?Institution $institutions): self
    {
        $this->institutions = $institutions;

        return $this;
    }

    public function getArreteMiseEnPlace(): ?string
    {
        return $this->arreteMiseEnPlace;
    }

    public function setArreteMiseEnPlace(?string $arreteMiseEnPlace): self
    {
        $this->arreteMiseEnPlace = $arreteMiseEnPlace;

        return $this;
    }

    public function getDateArreteMiseEnPlace(): ?\DateTimeInterface
    {
        return $this->dateArreteMiseEnPlace;
    }

    public function setDateArreteMiseEnPlace(?\DateTimeInterface $dateArreteMiseEnPlace): self
    {
        $this->dateArreteMiseEnPlace = $dateArreteMiseEnPlace;

        return $this;
    }

    public function getDepartements(): ?string
    {
        return $this->departements;
    }

    public function setDepartements(?string $departements): self
    {
        $this->departements = $departements;

        return $this;
    }

    public function getDateOuverture(): ?\DateTimeInterface
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(?\DateTimeInterface $dateOuverture): self
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    public function getNotePresentation(): ?string
    {
        return $this->notePresentation;
    }

    public function setNotePresentation(?string $notePresentation): self
    {
        $this->notePresentation = $notePresentation;

        return $this;
    }
}
