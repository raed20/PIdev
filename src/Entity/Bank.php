<?php

namespace App\Entity;

use App\Repository\BankRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BankRepository::class)]
class Bank
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $codeSwift = null;

    #[ORM\Column(length: 255)]
    private ?string $logo = null;

    #[ORM\Column(length: 255)]
    private ?string $phoneNum = null;

    #[ORM\OneToMany(targetEntity: Pret::class, mappedBy: 'IdBank')]
    private Collection $idPret;

    public function __construct()
    {
        $this->idPret = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodeSwift(): ?string
    {
        return $this->codeSwift;
    }

    public function setCodeSwift(string $codeSwift): static
    {
        $this->codeSwift = $codeSwift;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    public function getPhoneNum(): ?string
    {
        return $this->phoneNum;
    }

    public function setPhoneNum(string $phoneNum): static
    {
        $this->phoneNum = $phoneNum;

        return $this;
    }

    /**
     * @return Collection<int, Pret>
     */
    public function getIdPret(): Collection
    {
        return $this->idPret;
    }

    public function addIdPret(Pret $idPret): static
    {
        if (!$this->idPret->contains($idPret)) {
            $this->idPret->add($idPret);
            $idPret->setIdBank($this);
        }

        return $this;
    }

    public function removeIdPret(Pret $idPret): static
    {
        if ($this->idPret->removeElement($idPret)) {
            // set the owning side to null (unless already changed)
            if ($idPret->getIdBank() === $this) {
                $idPret->setIdBank(null);
            }
        }

        return $this;
    }
}
