<?php

require_once 'Vehicle.php';

// Bike.php
class Bike extends Vehicle implements LightableInterface
{
    public function switchOn() : bool
    {
        if ($this->currentSpeed > 10) {
            echo 'La dynamo est allumée!';
            return $this->switch = true;
        } else {
            echo 'Roule plus vite!';
            return $this->switch = false;
        }
    }

    public function switchOff() : bool
    {
        echo 'La dynamo est éteinte!';
        return $this->switch = false;
    }
}