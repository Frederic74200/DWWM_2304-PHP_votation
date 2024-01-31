<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CarRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
#[ApiResource]
class Car
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $car_brand = null;

    #[ORM\Column(length: 50)]
    private ?string $car_model = null;

    #[ORM\Column]
    private ?int $car_price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCarBrand(): ?string
    {
        return $this->car_brand;
    }

    public function setCarBrand(string $car_brand): static
    {
        $this->car_brand = $car_brand;

        return $this;
    }

    public function getCarModel(): ?string
    {
        return $this->car_model;
    }

    public function setCarModel(string $car_model): static
    {
        $this->car_model = $car_model;

        return $this;
    }

    public function getCarPrice(): ?int
    {
        return $this->car_price;
    }

    public function setCarPrice(int $car_price): static
    {
        $this->car_price = $car_price;

        return $this;
    }
}
