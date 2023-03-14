<?php

namespace App\Entity;

use App\Repository\ClubRepository;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

use ApiPlatform\Metadata\Get;

use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource(
    collectionOperations: ['get' => ['normalization_context' => ['groups' => 'club:list']]],
    itemOperations: ['get' => ['normalization_context' => ['groups' => 'club:item']]],
    paginationEnabled: false,
)]

#[ApiFilter(
    SearchFilter::class,
    properties: [
        'nom' => 'exact',
        'adresse1' => 'exact',
        'adresse2' => 'exact',
        'cp' => 'exact',
        'ville' => 'exact',
        'tel' => 'exact',
        
    ]
)]

#[ORM\Table(name: "CLUB")]
#[ORM\Entity(repositoryClass: ClubRepository::class)]
class Club
{
    #[ORM\Column(name: "ID", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "SEQUENCE")]
    #[ORM\SequenceGenerator(sequenceName: "CLUB_ID_seq", allocationSize: 1, initialValue: 1)]
    #[Groups(['club:list', 'club:item'])]
    private $id;
    #[ORM\Column(name: "NOM", type: "string", length: 50, nullable: false)]
    #[Groups(['club:list', 'club:item'])]
    private $nom;
    #[ORM\Column(name: "ADRESSE1", type: "string", length: 60, nullable: false)]
    #[Groups(['club:list', 'club:item'])]
    private $adresse1;
    #[ORM\Column(name: "ADRESSE2", type: "string", length: 60, nullable: true)]
    #[Groups(['club:list', 'club:item'])]
    private $adresse2;
    #[ORM\Column(name: "CP", type: "string", length: 5, nullable: false, options: ["fixed" => true])]
    #[Groups(['club:list', 'club:item'])]
    private $cp;
    #[ORM\Column(name: "VILLE", type: "string", length: 60, nullable: false)]
    #[Groups(['club:list', 'club:item'])]
    private $ville;
    #[ORM\Column(name: "TEL", type: "string", length: 14, nullable: false, options: ["fixed" => true])]
    #[Groups(['club:list', 'club:item'])]
    private $tel;
    public function getId() : ?int
    {
        return $this->id;
    }
    public function getNom() : ?string
    {
        return $this->nom;
    }
    public function setNom(string $nom) : self
    {
        $this->nom = $nom;
        return $this;
    }
    public function getAdresse1() : ?string
    {
        return $this->adresse1;
    }
    public function setAdresse1(string $adresse1) : self
    {
        $this->adresse1 = $adresse1;
        return $this;
    }
    public function getAdresse2() : ?string
    {
        return $this->adresse2;
    }
    public function setAdresse2(?string $adresse2) : self
    {
        $this->adresse2 = $adresse2;
        return $this;
    }
    public function getCp() : ?string
    {
        return $this->cp;
    }
    public function setCp(string $cp) : self
    {
        $this->cp = $cp;
        return $this;
    }
    public function getVille() : ?string
    {
        return $this->ville;
    }
    public function setVille(string $ville) : self
    {
        $this->ville = $ville;
        return $this;
    }
    public function getTel() : ?string
    {
        return $this->tel;
    }
    public function setTel(string $tel) : self
    {
        $this->tel = $tel;
        return $this;
    }
}
