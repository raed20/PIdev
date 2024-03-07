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

    #[ORM\Column(length: 255)]
    private ?string $stock_name = null;

    #[ORM\Column]
    private ?float $changerate = null;

    #[ORM\Column]
    private ?float $price = null;
    
  



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

    public function getStockName(): ?string
    {
        return $this->stock_name;
    }

    public function setStockName(string $stock_name): static
    {
        $this->stock_name = $stock_name;

        return $this;
    }

    public function getChangerate(): ?float
    {
        return $this->changerate;
    }

    public function setChangerate(float $changerate): static
    {
        $this->changerate = $changerate;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }
}
