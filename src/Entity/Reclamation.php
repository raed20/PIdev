<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Vich\Uploadable
 */
#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @Assert\Length(
     * min = 4,
     * minMessage = "Le champ 'Objet' doit comporter au moins 4 caractères."
     * )
     */
    #[ORM\Column(length: 255)]
    private ?string $Objet = null;

    /**
     * @Assert\Length(
     * min = 8,
     * minMessage = "Le champ 'Description' doit comporter au moins 8 caractères."
     * )
     */
    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

   /**
    *
    * @Vich\UploadableField(mapping="reclamation_images", fileNameProperty="imageName")
    */
    private ?File $imageFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName = null;
    #[ORM\Column]
    private ?bool $Etat = null;

    #[ORM\OneToOne(inversedBy: 'reclamation', cascade: ['persist', 'remove'])]
    private ?Reponse $Reponse = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateRec = null;

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

    public function getImageFile(): ?\Symfony\Component\HttpFoundation\File\File
    {
        return $this->imageFile;
    }

    public function setImageFile(?File $imageFile): static
    {
        $this->imageFile = $imageFile;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): static
    {
        $this->imageName = $imageName;

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
}
