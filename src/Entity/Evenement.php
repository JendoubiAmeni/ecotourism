<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull (message: "Il faut remplir ce chemp")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    #[Assert\PositiveOrZero(message: "La durée doit être un entier positif ou zéro")]
    private ?int $duree = null;


    #[ORM\Column]
    #[Assert\PositiveOrZero(message: "La durée doit être un entier positif ou zéro")]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    private ?float $prixA = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    private ?string $description = null;

 #[ORM\Column(length: 255)]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    private ?string $lieu = null;

    #[ORM\OneToMany(mappedBy: 'evenements', targetEntity: Participant::class, orphanRemoval: true)]
    private Collection $participants;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function __construct()
    {
        $this->participants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getPrixA(): ?float
    {
        return $this->prixA;
    }

    public function setPrixA(float $prixA): self
    {
        $this->prixA = $prixA;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }
    /**
     * @return Collection<int, Participant>
     */
    public function getParticipants(): Collection
    {
        return $this->participants;
    }

    public function addCParticipantontrat( $participant): self
    {
        if (!$this->participants->contains($participant)) {
            $this->participants->add($participant);
            $participant->setEvenements($this);
        }

        return $this;
    }

    public function removeCParticipantontrat( $participant): self
    {
        if ($this->participants->removeElement($participant)) {
            // set the owning side to null (unless already changed)
            if ($participant->getEvenements() === $this) {
                $participant->setEvenements(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
    public function  __toString()
    {
        return $this->getName();
    }
}
