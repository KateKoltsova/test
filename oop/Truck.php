<?php

//require_once 'vehicle.php';

class Truck extends Vehicle
{
    public function start()
    {
        if ($this->getSpeed() > 0) {
            parent::start();
        } else {
            return "Name of this Truck is " . $this->getName() . ". Car is ready to move. Increase the speed!" . PHP_EOL;
        }
    }

    public function stop()
    {
        parent::stop();
        return "Truck " . $this->getName() . " stop moving!" . PHP_EOL;

    }
}
