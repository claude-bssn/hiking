<?php

namespace App\Entity;

use App\Repository\HikeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HikeRepository::class)
 */
class Hike
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @ORM\Column(type="integer")
     */
    private $distance;

    /**
     * @ORM\Column(type="integer")
     */
    private $hight;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $highest;

    /**
     * @ORM\Column(type="integer")
     */
    private $lowest;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $difficulty;

    /**
     * @ORM\Column(type="boolean")
     */
    private $to_start;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $area;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $town;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $start;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pic;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $npoint;

    // /**
    //  * @ORM\Column(type="datetime")
    //  */
    // private $creation_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getDistance(): ?int
    {
        return $this->distance;
    }

    public function setDistance(int $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getHight(): ?int
    {
        return $this->hight;
    }

    public function setHight(int $hight): self
    {
        $this->hight = $hight;

        return $this;
    }

    public function getHighest(): ?string
    {
        return $this->highest;
    }

    public function setHighest(string $highest): self
    {
        $this->highest = $highest;

        return $this;
    }

    public function getLowest(): ?int
    {
        return $this->lowest;
    }

    public function setLowest(int $lowest): self
    {
        $this->lowest = $lowest;

        return $this;
    }

    public function getDifficulty(): ?string
    {
        return $this->difficulty;
    }

    public function setDifficulty(string $difficulty): self
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    public function getTo_start(): ?bool
    {
        return $this->to_start;
    }

    public function setTo_start(bool $to_start): self
    {
        $this->to_start = $to_start;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getTown(): ?string
    {
        return $this->town;
    }

    public function setTown(string $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(string $start): self
    {
        $this->start = $start;

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

    public function getPic(): ?string
    {
        return $this->pic;
    }

    public function setPic(string $pic): self
    {
        $this->pic = $pic;

        return $this;
    }

    public function getNpoint(): ?string
    {
        return $this->npoint;
    }

    public function setNpoint(string $npoint): self
    {
        $this->npoint = $npoint;

        return $this;
    }

    // public function getCreationDate(): ?\DateTimeInterface
    // {
    //     return $this->creation_date;
    // }

    // public function setCreationDate(\DateTimeInterface $creation_date): self
    // {
    //     $this->creation_date = $creation_date;

    //     return $this;
    // }
}
