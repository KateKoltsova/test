<?php

namespace oop;

class Truck extends Vehicle
{
    protected const COUNTRY_KANADA = 'Kanada';

    public function __construct($engine, $name, $maxSpeed, $material, $speed = 0)
    {
        parent::__construct($engine, $name, $maxSpeed, $material, $speed = 0);
        echo "You create a new Truck!" . PHP_EOL;
        echo "Name of this Truck is " . $this->getName() . "!" . PHP_EOL;
        echo "That Truck's interior made of " . $this->interior->material . "!" . PHP_EOL;
    }

    public function getInteriorSize()
    {
        return "All Truck's interior size approximately " . $this->interior::SIZE_TRUCK . "!" . PHP_EOL;
    }

    public function getEngineInfo()
    {
        return "Truck " . $this->getName() . " use engine produced by " . $this->engine->manufacturer . " in " . $this->engine->year . "!" . PHP_EOL;
    }

    public static function setCountry()
    {
        self::$country = self::COUNTRY_KANADA;
        return 'All Trucks made in ' . self::$country . '!' . PHP_EOL;
    }

    public static function setCountWheel()
    {
        self::$countWheel = 8;
        return 'All Cars have only ' . self::$countWheel . '!' . PHP_EOL;
    }

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
