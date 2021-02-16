<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
  public const PAGE_NB_ITEMS = 10;
  
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $name;

  /**
   * @ORM\Column(type="text")
   */
  private $description;

  /**
   * @ORM\Column(type="boolean")
   */
  private $promo;

  /**
   * @ORM\Column(type="date")
   */
  private $created;

  /**
   * @ORM\Column(type="string", length=255, nullable=true)
   */
  private $picture;

  public function getId(): ?int
  {
    return $this->id;
  }

  public function getName(): ?string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

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

  public function getPromo(): ?bool
  {
    return $this->promo;
  }

  public function setPromo(bool $promo): self
  {
    $this->promo = $promo;

    return $this;
  }

 
  public function getCreated(): ?\DateTimeInterface
  {
    return $this->created;
  }

  public function setCreated(\DateTimeInterface $created): self
  {
    $this->created = $created;

    return $this;
  }

  public function getPicture(): ?string
  {
      return $this->picture;
  }

  public function setPicture(?string $picture): self
  {
      $this->picture = $picture;

      return $this;
  }
}