<?php

require_once 'vehicle.php';

class Motorcycle extends Vehicle
{
    public function start()
    {
        if ($this->getSpeed() > 0) {
            parent::start();
        } else {
            return "Name of this Motorcycle is " . $this->getName() . ". Car is ready to move. Increase the speed!" . PHP_EOL;
        }
    }

    public function stop()
    {
        parent::stop();
        return "Motorcycle " . $this->getName() . " stop moving!" . PHP_EOL;

    }
}

