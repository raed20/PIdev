<?php

namespace App\Entity;

use App\Repository\CommandRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandRepository::class)]
class Command
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: 'commands')]
    private Collection $command;

    public function __construct()
    {
        $this->command = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getCommand(): Collection
    {
        return $this->command;
    }

    public function addCommand(Product $command): static
    {
        if (!$this->command->contains($command)) {
            $this->command->add($command);
        }

        return $this;
    }

    public function removeCommand(Product $command): static
    {
        $this->command->removeElement($command);

        return $this;
    }
}
