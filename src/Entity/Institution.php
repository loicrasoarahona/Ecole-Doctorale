<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\InstitutionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InstitutionRepository::class)]
#[ApiResource]
class Institution
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomInstitution = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $typeInstitution = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $domaineInstitution = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $gradeInstitution = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mentionInstitution = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $referenceDate = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $departementInstitution = null;

    #[ORM\OneToMany(mappedBy: 'institutions', targetEntity: EcoleDoctorale::class)]
    private Collection $ecoleDoctorales;

    public function __construct()
    {
        $this->ecoleDoctorales = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomInstitution(): ?string
    {
        return $this->nomInstitution;
    }

    public function setNomInstitution(string $nomInstitution): self
    {
        $this->nomInstitution = $nomInstitution;

        return $this;
    }

    public function getTypeInstitution(): ?string
    {
        return $this->typeInstitution;
    }

    public function setTypeInstitution(?string $typeInstitution): self
    {
        $this->typeInstitution = $typeInstitution;

        return $this;
    }

    public function getDomaineInstitution(): ?string
    {
        return $this->domaineInstitution;
    }

    public function setDomaineInstitution(?string $domaineInstitution): self
    {
        $this->domaineInstitution = $domaineInstitution;

        return $this;
    }

    public function getGradeInstitution(): ?string
    {
        return $this->gradeInstitution;
    }

    public function setGradeInstitution(?string $gradeInstitution): self
    {
        $this->gradeInstitution = $gradeInstitution;

        return $this;
    }

    public function getMentionInstitution(): ?string
    {
        return $this->mentionInstitution;
    }

    public function setMentionInstitution(?string $mentionInstitution): self
    {
        $this->mentionInstitution = $mentionInstitution;

        return $this;
    }

    public function getReferenceDate(): ?\DateTimeInterface
    {
        return $this->referenceDate;
    }

    public function setReferenceDate(?\DateTimeInterface $referenceDate): self
    {
        $this->referenceDate = $referenceDate;

        return $this;
    }

    public function getDepartementInstitution(): ?string
    {
        return $this->departementInstitution;
    }

    public function setDepartementInstitution(?string $departementInstitution): self
    {
        $this->departementInstitution = $departementInstitution;

        return $this;
    }

    /**
     * @return Collection<int, EcoleDoctorale>
     */
    public function getEcoleDoctorales(): Collection
    {
        return $this->ecoleDoctorales;
    }

    public function addEcoleDoctorale(EcoleDoctorale $ecoleDoctorale): self
    {
        if (!$this->ecoleDoctorales->contains($ecoleDoctorale)) {
            $this->ecoleDoctorales->add($ecoleDoctorale);
            $ecoleDoctorale->setInstitutions($this);
        }

        return $this;
    }

    public function removeEcoleDoctorale(EcoleDoctorale $ecoleDoctorale): self
    {
        if ($this->ecoleDoctorales->removeElement($ecoleDoctorale)) {
            // set the owning side to null (unless already changed)
            if ($ecoleDoctorale->getInstitutions() === $this) {
                $ecoleDoctorale->setInstitutions(null);
            }
        }

        return $this;
    }
}
