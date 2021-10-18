<?php

namespace App\Entity;

use App\Repository\ProfilsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfilsRepository::class)
 */
class Profils
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\OneToOne(targetEntity=Identifiants::class, mappedBy="profils", cascade={"persist", "remove"})
     */
    private $identifiants;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getIdentifiants(): ?Identifiants
    {
        return $this->identifiants;
    }

    public function setIdentifiants(Identifiants $identifiants): self
    {
        // set the owning side of the relation if necessary
        if ($identifiants->getProfils() !== $this) {
            $identifiants->setProfils($this);
        }

        $this->identifiants = $identifiants;

        return $this;
    }
}
