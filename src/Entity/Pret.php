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


    #[ORM\ManyToOne(inversedBy: 'idPret')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Bank $IdBank = null;

    #[ORM\ManyToOne(inversedBy: 'user')]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $gender = null;

    #[ORM\Column(length: 255)]
    private ?string $married = null;

    #[ORM\Column(length: 255)]
    private ?int $dependents = null;

    #[ORM\Column(length: 255)]
    private ?string $education = null;

    #[ORM\Column(length: 255)]
    private ?string $Self_Employed = null;

    #[ORM\Column(length: 255)]
    private ?int $ApplicantIncome = 0;

    #[ORM\Column(length: 255)]
    private ?int $CoapplicantIncome = 0;

    #[ORM\Column(length: 255)]
    private ?int $LoanAmount = 0;

    #[ORM\Column(length: 255)]
    private ?int $Loan_Amount_Term = 0;

    #[ORM\Column(length: 255)]
    private ?int $Credit_History = 0;

    #[ORM\Column(length: 255)]
    private ?string $Property_Area = null;

    #[ORM\Column(length: 255)]
    private ?string $Loan_status = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getMarried(): ?string
    {
        return $this->married;
    }

    public function setMarried(string $married): static
    {
        $this->married = $married;

        return $this;
    }

    public function getDependents(): ?int
    {
        return $this->dependents;
    }

    public function setDependents(int $dependents): static
    {
        $this->dependents = $dependents;

        return $this;
    }

    public function getEducation(): ?string
    {
        return $this->education;
    }

    public function setEducation(string $education): static
    {
        $this->education = $education;

        return $this;
    }

    public function getSelfEmployed(): ?string
    {
        return $this->Self_Employed;
    }

    public function setSelfEmployed(string $Self_Employed): static
    {
        $this->Self_Employed = $Self_Employed;

        return $this;
    }

    public function getApplicantIncome(): ?int
    {
        return $this->ApplicantIncome;
    }

    public function setApplicantIncome(int $ApplicantIncome): static
    {
        $this->ApplicantIncome = $ApplicantIncome;

        return $this;
    }

    public function getCoapplicantIncome(): ?int
    {
        return $this->CoapplicantIncome;
    }

    public function setCoapplicantIncome(int $CoapplicantIncome): static
    {
        $this->CoapplicantIncome = $CoapplicantIncome;

        return $this;
    }

    public function getLoanAmount(): ?int
    {
        return $this->LoanAmount;
    }

    public function setLoanAmount(int $LoanAmount): static
    {
        $this->LoanAmount = $LoanAmount;

        return $this;
    }

    public function getLoanAmountTerm(): ?int
    {
        return $this->Loan_Amount_Term;
    }

    public function setLoanAmountTerm(int $Loan_Amount_Term): static
    {
        $this->Loan_Amount_Term = $Loan_Amount_Term;

        return $this;
    }

    public function getCreditHistory(): ?int
    {
        return $this->Credit_History;
    }

    public function setCreditHistory(int $Credit_History): static
    {
        $this->Credit_History = $Credit_History;

        return $this;
    }

    public function getPropertyArea(): ?string
    {
        return $this->Property_Area;
    }

    public function setPropertyArea(string $Property_Area): static
    {
        $this->Property_Area = $Property_Area;

        return $this;
    }

    public function getLoanStatus(): ?string
    {
        return $this->Loan_status;
    }

    public function setLoanStatus(string $Loan_status): static
    {
        $this->Loan_status = $Loan_status;

        return $this;
    }
}

