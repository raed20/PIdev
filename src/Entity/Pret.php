<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\PretRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PretRepository::class)]
class Pret
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "name is required")]

    private ?string $Fname = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "email is required")]

    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "phone number is required")]

    private ?string $phonenum = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "amount is required")]

    private ?string $amount = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "duration is required")]

    private ?string $duration = null;

    #[ORM\ManyToOne(inversedBy: 'idPret')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Bank $IdBank = null;

    #[ORM\ManyToOne(inversedBy: 'user')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFname(): ?string
    {
        return $this->Fname;
    }

    public function setFname(string $Fname): static
    {
        $this->Fname = $Fname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPhonenum(): ?string
    {
        return $this->phonenum;
    }

    public function setPhonenum(string $phonenum): static
    {
        $this->phonenum = $phonenum;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function getIdBank(): ?Bank
    {
        return $this->IdBank;
    }

    public function setIdBank(?Bank $IdBank): static
    {
        $this->IdBank = $IdBank;

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
}
