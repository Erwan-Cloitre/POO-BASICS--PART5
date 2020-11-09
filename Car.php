<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake;

    public function switchOn() : bool
    {
        echo 'L\'éclairage s\'allume' ;
        return $this->switch = true;
    }

    public function switchOff() : bool
    {
        echo 'L\'éclairage s\'éteint' ;
        return $this->switch = false;
    }

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function setParkBrake(bool $hasParkBrake): bool
    {
        return $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {
        if ($this->hasParkBrake === true) {
            throw new Exception("Il y a le frein à main!");
        }
        return "Vous pouvez commencer à rouler";
    }
}