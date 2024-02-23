<?php

namespace App\Entity;

use App\Repository\OpportuniteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Mime\Message;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OpportuniteRepository::class)]
class Opportunite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Ref is required")]
    #[Assert\Positive(message: "Ref must be a positive number")]
    #[Assert\GreaterThan(value: 0, message: "Ref must be greater than 0")]
    private ?int $ref = null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Description is required")]
    #[Assert\Length(min: 10, minMessage: "Description must be at least {{ limit }} characters long")]
    private ?string $description = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Prix is required")]
    #[Assert\PositiveOrZero(message: "negative value")]
    private ?float $prix = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Name is required")]

    private ?string $name = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Last Price is required")]
    #[Assert\PositiveOrZero(message: "negative value")]

    private ?float $lastprice = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "24H % is required")]

    private ?float $yesterdaychange = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Market Cap is required")]
    #[Assert\PositiveOrZero(message: "negative value")]
    private ?float $marketcap = null;


    #[ORM\OneToMany(targetEntity: Investissement::class, mappedBy: 'opport')]
    private Collection $investissements;

 

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLastprice(): ?float
    {
        return $this->lastprice;
    }

    public function setLastprice(float $lastprice): static
    {
        $this->lastprice = $lastprice;

        return $this;
    }

    public function getYesterdaychange(): ?float
    {
        return $this->yesterdaychange;
    }

    public function setYesterdaychange(float $yesterdaychange): static
    {
        $this->yesterdaychange = $yesterdaychange;

        return $this;
    }

    public function getMarketcap(): ?float
    {
        return $this->marketcap;
    }

    public function setMarketcap(float $marketcap): static
    {
        $this->marketcap = $marketcap;

        return $this;
    }

    /**
     * @return Collection<int, Investissement>
     */
    public function getInvestissements(): Collection
    {
        return $this->investissements;
    }

    public function addInvestissement(Investissement $investissement): static
    {
        if (!$this->investissements->contains($investissement)) {
            $this->investissements->add($investissement);
            $investissement->setOpport($this);
        }

        return $this;
    }

    public function removeInvestissement(Investissement $investissement): static
    {
        if ($this->investissements->removeElement($investissement)) {
            // set the owning side to null (unless already changed)
            if ($investissement->getOpport() === $this) {
                $investissement->setOpport(null);
            }
        }

        return $this;
    }
}
