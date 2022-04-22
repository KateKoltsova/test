<?php

namespace oop;

class Motorcycle extends Vehicle
{
    protected const COUNTRY_FRANCE = 'France';

    public function __construct($engine, $name, $maxSpeed, $material, $speed = 0)
    {
        parent::__construct($engine, $name, $maxSpeed, $material, $speed = 0);
        echo "You create a new Motorcycle!" . PHP_EOL;
        echo "Name of this Motorcycle is " . $this->getName() . "!" . PHP_EOL;
        echo "That Motorcycle's interior made of " . $this->interior->material . "!" . PHP_EOL;
    }

    public function getInteriorSize()
    {
        return "All Motorcycle's interior size approximately " . $this->interior::SIZE_MOTORCYCLE . "!" . PHP_EOL;
    }

    public function getEngineInfo()
    {
        return "Motorcycle " . $this->getName() . " use engine produced by " . $this->engine->manufacturer . " in " . $this->engine->year . "!" . PHP_EOL;
    }

    public static function setCountry()
    {
        self::$country = self::COUNTRY_FRANCE;
        return 'All Motorcycles made in ' . self::$country . '!' . PHP_EOL;
    }

    public static function setCountWheel()
    {
        self::$countWheel = 2;
        return 'All Cars have only ' . self::$countWheel . '!' . PHP_EOL;
    }

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

