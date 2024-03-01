<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\PretRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Context\ExecutionContextInterface;


#[ORM\Entity(repositoryClass: PretRepository::class)]
class Pret
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Full name is required")]
    private ?string $Fname = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/',
        message: 'Please enter a valid email address.'
    )]
    private ?string $email = null;
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    #[Assert\Regex(
        pattern: '/^\+216\s\d{1,8}$/',
        message: 'Please enter a valid phone number starting with +216.'
    )]
    private ?string $phonenum = null; 

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Amount is required")]
    #[Assert\Regex(
        pattern: "/^\d+(\.\d{1,2})?$/",
        message: "Invalid amount format. Please enter a valid amount."
    )]
    private ?string $amount = null;

    #[ORM\Column(length: 255)]
#[Assert\NotBlank(message: "Duration is required")]
#[Assert\Regex(
    pattern: "/^\d+$/",
    message: "Duration must be a positive integer."
)]
public ?string $duration = null;
public function validateDuration(ExecutionContextInterface $context)
{
    if ($this->duration !== null && (int)$this->duration > 60) {
        $context->buildViolation('Duration cannot exceed 60 months (5 years).')
            ->atPath('duration')
            ->addViolation();
    }}

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
