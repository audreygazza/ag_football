<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EquipmentRepository")
 */
class Equipment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Type(
     *     type="string",
     *     message="The value {{ value }} is not a valid, it should be {{ type }}."
     * )
     * @Assert\Regex("/^[\p{L}-]*$/u")
     */
    private $designation;

    /**
     * @ORM\Column(type="text")
     * @Assert\Type(
     *     type="string",
     *     message="The value {{ value }} is not a valid, it should be {{ type }}."
     * )
     * @Assert\Regex("/^[\p{L}-_\/,;.:\(\)]*$/u")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Type(
     *     type="string",
     *     message="The value {{ value }} is not a valid, it should be {{ type }}."
     * )
     * @Assert\Regex("/[0-9A-Za-z-_éèêçùàï]/")
     */
    private $brand;

    /**
     * @ORM\Column(type="float")
     * @Assert\Type("float")
     * @Assert\Regex("/^[0-9.,]/")
     */
    private $price;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Type("integer")
     * @Assert\Regex("/^[0-9]/")
     */
    private $quantity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

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

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
