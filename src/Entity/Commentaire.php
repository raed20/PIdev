<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contenue = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?blog $idblog = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenue(): ?string
    {
        return $this->contenue;
    }

    public function setContenue(?string $contenue): static
    {
        $this->contenue = $contenue;

        return $this;
    }

    public function getIdblog(): ?blog
    {
        return $this->idblog;
    }

    public function setIdblog(?blog $idblog): static
    {
        $this->idblog = $idblog;

        return $this;
    }
}
