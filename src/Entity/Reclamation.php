<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Objet = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column]
    private ?bool $Etat = null;

    #[ORM\OneToOne(inversedBy: 'reclamation', cascade: ['persist', 'remove'])]
    private ?Reponse $Reponse = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateRec = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    private ?user $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjet(): ?string
    {
        return $this->Objet;
    }

    public function setObjet(string $Objet): static
    {
        $this->Objet = $Objet;

        return $this;
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

    public function isEtat(): ?bool
    {
        return $this->Etat;
    }

    public function setEtat(bool $Etat): static
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getReponse(): ?Reponse
    {
        return $this->Reponse;
    }

    public function setReponse(?Reponse $reponse): static
    {
        $this->Reponse = $reponse;

        return $this;
    }

    public function getDateRec(): ?\DateTimeInterface
    {
        return $this->DateRec;
    }

    public function setDateRec(\DateTimeInterface $DateRec): static
    {
        $this->DateRec = $DateRec;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): static
    {
        $this->user = $user;

        return $this;
    }
}
