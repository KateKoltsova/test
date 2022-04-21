<?php

//require_once 'MovableInterface.php';

abstract class Vehicle implements MovableInterface
{
    private string $name;
    private int $speed;
    private int $maxSpeed;

    public function __construct($name, $maxSpeed, $speed = 0)
    {
        $this->name = $name;
        $this->maxSpeed = $maxSpeed;
        $this->speed = $speed;
    }

    protected function getName()
    {
        return $this->name;
    }

    protected function getSpeed()
    {
        return $this->speed;
    }

    public function start()
    {
        if ($this->speed > 0) {
            return "For the first, $this->name must stop moving!" . PHP_EOL;
        }
    }

    public function stop()
    {
        $this->speed = 0;
    }

    public function up(int $unit)
    {
        if ($this->speed + $unit <= $this->maxSpeed) {
            $this->speed = $this->speed + $unit;
            return "$this->name increase speed to $this->speed!" . PHP_EOL;
        } else {
            return "$this->name can't moving over max speed $this->maxSpeed! " . PHP_EOL;
        }
    }

    public function down(int $unit)
    {
        if ($this->speed - $unit > 0) {
            $this->speed = $this->speed - $unit;
            return "$this->name decrease speed to $this->speed!" . PHP_EOL;
        } else {
            return "$this->name moving at min speed $this->speed!" . PHP_EOL;
        }
    }
}
