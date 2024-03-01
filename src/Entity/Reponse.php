<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\OneToOne(mappedBy: 'Reponse', cascade: ['persist', 'remove'])]
    private ?Reclamation $reclamation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateRep = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): static
    {
        // unset the owning side of the relation if necessary
        if ($reclamation === null && $this->reclamation !== null) {
            $this->reclamation->setReponse(null);
        }

        // set the owning side of the relation if necessary
        if ($reclamation !== null && $reclamation->getReponse() !== $this) {
            $reclamation->setReponse($this);
        }

        $this->reclamation = $reclamation;

        return $this;
    }

    public function getDateRep(): ?\DateTimeInterface
    {
        return $this->DateRep;
    }

    public function setDateRep(\DateTimeInterface $DateRep): static
    {
        $this->DateRep = $DateRep;

        return $this;
    }
}
