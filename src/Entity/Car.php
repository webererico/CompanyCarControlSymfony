<?php

namespace App\Entity;

use App\Repository\CarRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarRepository::class)
 */
class Car
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="App\Entity\Brand", inversedBy="id", cascade={"persist"})
     */
    private $fk_brand;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $model;

    /**
     * @ORM\Column(type="integer")
     */
    private $horse_power;

    /**
     * @ORM\Column(type="integer")
     */
    private $ports;

    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="App\Entity\Color", inversedBy="id", cascade={"persist"})
     */
    private $fk_color;

    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="id" ,cascade={"persist"})
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id", nullable=true)
     */
    private $fk_client;

    /**
     * @ORM\Column(type="integer")
     */
    private $kilometers;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getHorsePower(): ?int
    {
        return $this->horse_power;
    }

    public function setHorsePower(int $horse_power): self
    {
        $this->horse_power = $horse_power;

        return $this;
    }

    public function getPorts(): ?int
    {
        return $this->ports;
    }

    public function setPorts(int $ports): self
    {
        $this->ports = $ports;

        return $this;
    }

    public function getKilometers(): ?int
    {
        return $this->kilometers;
    }

    public function setKilometers(int $kilometers): self
    {
        $this->kilometers = $kilometers;

        return $this;
    }
    public function getFk_color(): ?Color
    {
        return $this->fk_color;
    }

    public function setFk_color(Color $fk_color): self
    {
        $this->fk_color = $fk_color;
        return $this;
    }
    public function getFk_brand(): ?Brand
    {
        return $this->fk_brand;
    }

    public function setFk_brand(Brand $fk_brand): self
    {
        $this->fk_brand = $fk_brand;
        return $this;
    }
    public function getFk_client(): ?Client
    {
        return $this->fk_client;
    }

    public function setFk_client(Client $fk_client): self
    {
        $this->fk_client = $fk_client;
        return $this;
    }

    public function getFkBrand(): ?Brand
    {
        return $this->fk_brand;
    }

    public function setFkBrand(?Brand $fk_brand): self
    {
        $this->fk_brand = $fk_brand;

        return $this;
    }

    public function getFkColor(): ?Color
    {
        return $this->fk_color;
    }

    public function setFkColor(?Color $fk_color): self
    {
        $this->fk_color = $fk_color;

        return $this;
    }

    public function getFkClient(): ?Client
    {
        return $this->fk_client;
    }

    public function setFkClient(?Client $fk_client): self
    {
        $this->fk_client = $fk_client;

        return $this;
    }
}
