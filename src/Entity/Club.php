<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "CLUB")]
#[ORM\Entity(repositoryClass: ClubRepository::class)]
class Club
{
    #[ORM\Column(name: "ID", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "SEQUENCE")]
    #[ORM\SequenceGenerator(sequenceName: "CLUB_ID_seq", allocationSize: 1, initialValue: 1)]
    private $id;

    #[ORM\Column(name: "NOM", type: "string", length: 50, nullable: false)]
    private $nom;

    #[ORM\Column(name: "ADRESSE1", type: "string", length: 60, nullable: false)]
    private $adresse1;

    #[ORM\Column(name: "ADRESSE2", type: "string", length: 60, nullable: true)]
    private $adresse2;

    #[ORM\Column(name: "CP", type: "string", length: 5, nullable: false, options: ["fixed" => true])]
    private $cp;

    #[ORM\Column(name: "VILLE", type: "string", length: 60, nullable: false)]
    private $ville;

    #[ORM\Column(name: "TEL", type: "string", length: 14, nullable: false, options: ["fixed" => true])]
    private $tel;

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

    public function getAdresse1(): ?string
    {
        return $this->adresse1;
    }

    public function setAdresse1(string $adresse1): self
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    public function getAdresse2(): ?string
    {
        return $this->adresse2;
    }

    public function setAdresse2(?string $adresse2): self
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }


}
