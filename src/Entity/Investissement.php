<?php

namespace App\Entity;

use App\Repository\InvestissementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvestissementRepository::class)]
class Investissement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $montant = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateInvest = null;

    #[ORM\ManyToOne(inversedBy: 'investissements')]
    private ?Opportunite $opport = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateInvest(): ?\DateTimeInterface
    {
        return $this->dateInvest;
    }

    public function setDateInvest(\DateTimeInterface $dateInvest): static
    {
        $this->dateInvest = $dateInvest;

        return $this;
    }

    public function getOpport(): ?Opportunite
    {
        return $this->opport;
    }

    public function setOpport(?Opportunite $opport): static
    {
        $this->opport = $opport;

        return $this;
    }
}
