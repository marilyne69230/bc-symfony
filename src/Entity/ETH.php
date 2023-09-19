<?php

namespace App\Entity;

use App\Repository\ETHRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ETHRepository::class)]
class ETH
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['ethAll'])]
    private ?int $id = null;

    #[ORM\Column]
    #[Groups(['ethAll'])]
    private ?int $price = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups(['ethAll'])]

    private ?\DateTimeInterface $date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }
}
