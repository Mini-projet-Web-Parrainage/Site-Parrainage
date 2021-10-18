<?php

namespace App\Entity;

use App\Repository\IdentifiantsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IdentifiantsRepository::class)
 */
class Identifiants
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
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mdp;

    /**
     * @ORM\OneToOne(targetEntity=profils::class, inversedBy="identifiants", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $profils;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getProfils(): ?profils
    {
        return $this->profils;
    }

    public function setProfils(profils $profils): self
    {
        $this->profils = $profils;

        return $this;
    }
}
