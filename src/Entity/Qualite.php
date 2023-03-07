<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "QUALITE")]
#[ORM\Entity(repositoryClass: QualiteRepository::class)]
class Qualite
{

    #[ORM\Column(name: "ID", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "SEQUENCE")]
    #[ORM\SequenceGenerator(sequenceName: "QUALITE_ID_seq", allocationSize: 1, initialValue: 1)]
    private $id;
    
    #[ORM\Column(name: "LIBELLEQUALITE", type: "string", length: 50, nullable: false)]
    private $libellequalite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellequalite(): ?string
    {
        return $this->libellequalite;
    }

    public function setLibellequalite(string $libellequalite): self
    {
        $this->libellequalite = $libellequalite;

        return $this;
    }


}
