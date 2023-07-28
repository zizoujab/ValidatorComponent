<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class Cat
{
    #[NotBlank]
    private string $name;
    #[NotBlank]
    private string $breed;

    #[Positive]
    private ?int $age;

    #[Choice(['White', 'Black', 'Gray'])]
    private ?string $color;
    #[Positive]
    private ?float $weight;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Cat
     */
    public function setName(string $name): Cat
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * @param string $breed
     * @return Cat
     */
    public function setBreed(string $breed): Cat
    {
        $this->breed = $breed;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * @param int|null $age
     * @return Cat
     */
    public function setAge(?int $age): Cat
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string|null $color
     * @return Cat
     */
    public function setColor(?string $color): Cat
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @param float|null $weight
     * @return Cat
     */
    public function setWeight(?float $weight): Cat
    {
        $this->weight = $weight;
        return $this;
    }



}