<?php

namespace App\Entity;

use App\Repository\QualiteRepository;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

use ApiPlatform\Metadata\Get;

use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource(
    collectionOperations: ['get' => ['normalization_context' => ['groups' => 'qualite:list']]],
    itemOperations: ['get' => ['normalization_context' => ['groups' => 'qualite:item']]],
    paginationEnabled: false,
)]

#[ApiFilter(
    SearchFilter::class,
    properties: [
        'libellequalite' => 'exact',
    ]
)]

#[ORM\Table(name: "QUALITE")]
#[ORM\Entity(repositoryClass: QualiteRepository::class)]
class Qualite
{
    #[ORM\Column(name: "ID", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "SEQUENCE")]
    #[ORM\SequenceGenerator(sequenceName: "QUALITE_ID_seq", allocationSize: 1, initialValue: 1)]
    #[Groups(['qualite:list', 'qualite:item'])]
    private $id;
    #[ORM\Column(name: "LIBELLEQUALITE", type: "string", length: 50, nullable: false)]
    #[Groups(['qualite:list', 'qualite:item'])]
    private $libellequalite;
    public function getId() : ?int
    {
        return $this->id;
    }
    public function getLibellequalite() : ?string
    {
        return $this->libellequalite;
    }
    public function setLibellequalite(string $libellequalite) : self
    {
        $this->libellequalite = $libellequalite;
        return $this;
    }
}
