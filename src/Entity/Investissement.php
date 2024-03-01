<?php

namespace App\Entity;

use App\Repository\InvestissementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvestissementRepository::class)]
class Investissement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BIGINT)]
    #[Assert\PositiveOrZero(message: "negative value")]
    #[Assert\NotBlank(message: "Amount is required")]
    private ?string $montant = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateInvest = null;
    
    #[ORM\ManyToOne(inversedBy: 'investissements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Opportunite $opport = null;

    #[ORM\ManyToOne(inversedBy: 'investissements')]
    private ?User $user = null;

    #[ORM\Column]
    private ?float $total_value = null;
    
  



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

    public function setDateInvest(\DateTimeInterface $dateInvest):self
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getTotalValue(): ?float
    {
        return $this->total_value;
    }

    public function setTotalValue(float $total_value): static
    {
        $this->total_value = $total_value;

        return $this;
    }
}
