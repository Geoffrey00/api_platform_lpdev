<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CatRepository;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CatRepository::class)]
#[ApiResource]
class Cat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $length = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $origin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image_link = null;

    #[ORM\Column(nullable: true)]
    private ?int $family_friendly = null;

    #[ORM\Column(nullable: true)]
    private ?int $shedding = null;

    #[ORM\Column(nullable: true)]
    private ?int $general_health = null;

    #[ORM\Column(nullable: true)]
    private ?int $playfulness = null;

    #[ORM\Column(nullable: true)]
    private ?int $meowing = null;

    #[ORM\Column(nullable: true)]
    private ?int $children_friendly = null;

    #[ORM\Column(nullable: true)]
    private ?int $stranger_friendly = null;

    #[ORM\Column(nullable: true)]
    private ?int $grooming = null;

    #[ORM\Column(nullable: true)]
    private ?int $intelligence = null;

    #[ORM\Column(nullable: true)]
    private ?int $other_pets_friendly = null;

    #[ORM\Column(nullable: true)]
    private ?int $min_weight = null;

    #[ORM\Column(nullable: true)]
    private ?int $max_weight = null;

    #[ORM\Column(nullable: true)]
    private ?int $min_life_expectancy = null;

    #[ORM\Column(nullable: true)]
    private ?int $max_life_expectancy = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLength(): ?string
    {
        return $this->length;
    }

    public function setLength(string $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(?string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    public function getImageLink(): ?string
    {
        return $this->image_link;
    }

    public function setImageLink(?string $image_link): self
    {
        $this->image_link = $image_link;

        return $this;
    }

    public function getFamilyFriendly(): ?int
    {
        return $this->family_friendly;
    }

    public function setFamilyFriendly(?int $family_friendly): self
    {
        $this->family_friendly = $family_friendly;

        return $this;
    }

    public function getShedding(): ?int
    {
        return $this->shedding;
    }

    public function setShedding(?int $shedding): self
    {
        $this->shedding = $shedding;

        return $this;
    }

    public function getGeneralHealth(): ?int
    {
        return $this->general_health;
    }

    public function setGeneralHealth(?int $general_health): self
    {
        $this->general_health = $general_health;

        return $this;
    }

    public function getPlayfulness(): ?int
    {
        return $this->playfulness;
    }

    public function setPlayfulness(?int $playfulness): self
    {
        $this->playfulness = $playfulness;

        return $this;
    }

    public function getMeowing(): ?int
    {
        return $this->meowing;
    }

    public function setMeowing(?int $meowing): self
    {
        $this->meowing = $meowing;

        return $this;
    }

    public function getChildrenFriendly(): ?int
    {
        return $this->children_friendly;
    }

    public function setChildrenFriendly(?int $children_friendly): self
    {
        $this->children_friendly = $children_friendly;

        return $this;
    }

    public function getStrangerFriendly(): ?int
    {
        return $this->stranger_friendly;
    }

    public function setStrangerFriendly(?int $stranger_friendly): self
    {
        $this->stranger_friendly = $stranger_friendly;

        return $this;
    }

    public function getGrooming(): ?int
    {
        return $this->grooming;
    }

    public function setGrooming(?int $grooming): self
    {
        $this->grooming = $grooming;

        return $this;
    }

    public function getIntelligence(): ?int
    {
        return $this->intelligence;
    }

    public function setIntelligence(?int $intelligence): self
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    public function getOtherPetsFriendly(): ?int
    {
        return $this->other_pets_friendly;
    }

    public function setOtherPetsFriendly(?int $other_pets_friendly): self
    {
        $this->other_pets_friendly = $other_pets_friendly;

        return $this;
    }

    public function getMinWeight(): ?int
    {
        return $this->min_weight;
    }

    public function setMinWeight(?int $min_weight): self
    {
        $this->min_weight = $min_weight;

        return $this;
    }

    public function getMaxWeight(): ?int
    {
        return $this->max_weight;
    }

    public function setMaxWeight(?int $max_weight): self
    {
        $this->max_weight = $max_weight;

        return $this;
    }

    public function getMinLifeExpectancy(): ?int
    {
        return $this->min_life_expectancy;
    }

    public function setMinLifeExpectancy(?int $min_life_expectancy): self
    {
        $this->min_life_expectancy = $min_life_expectancy;

        return $this;
    }

    public function getMaxLifeExpectancy(): ?int
    {
        return $this->max_life_expectancy;
    }

    public function setMaxLifeExpectancy(?int $max_life_expectancy): self
    {
        $this->max_life_expectancy = $max_life_expectancy;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
