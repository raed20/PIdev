<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\BlogRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\DBAL\Types\Types;



#[Vich\Uploadable]
#[ORM\Entity(repositoryClass: BlogRepository::class)]
class Blog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre est obligatoire")]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min:10)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?string $image = null;

    #[Vich\UploadableField(mapping: "blog_images", fileNameProperty: "image")]
    private ?File $imageFile = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\Length(min:10)]
    private ?string $contenu = null;

    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'idblog')]
    private Collection $commentaires;
    

    






    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        
        $this->likes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre) 
    {
        $this->titre = $titre;

        return $this;
    }

    public function setImageFile(File $imageFile)
    {
        $this->imageFile = $imageFile;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image): static
    {
        $this->image = $image;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    

     

    
    

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description) 
    {
        $this->description = $description;

        return $this;
    }

    

    

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): static
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires->add($commentaire);
            $commentaire->setIdblog($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): static
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getIdblog() === $this) {
                $commentaire->setIdblog(null);
            }
        }

        return $this;
    }

}