<?php

namespace oop;

class Car extends Vehicle
{
    protected const COUNTRY_USA = 'USA';

    public function __construct(Engine $engine, $name, $maxSpeed, $material, $speed = 0)
    {
        parent::__construct($engine, $name, $maxSpeed, $material, $speed = 0);
        echo "You create a new Car!" . PHP_EOL;
        echo "Name of this Car is " . $this->getName() . "!" . PHP_EOL;
    }

    public function getInteriorMaterial()
    {
        return "That Car's interior made of " . $this->interior->material . "!" . PHP_EOL;
    }

    public function getInteriorSize()
    {
        return "All Car's interior size approximately " . $this->interior::SIZE_CAR . "!" . PHP_EOL;
    }

    public function getEngineInfo()
    {
        return "Car " . $this->getName() . " use engine produced by " . $this->engine->manufacturer . " in " . $this->engine->year . "!" . PHP_EOL;
    }

    public static function setCountry()
    {
        self::$country = self::COUNTRY_USA;
        return 'All Cars made in ' . self::$country . '!' . PHP_EOL;
    }

    public static function setCountWheel()
    {
        self::$countWheel = 4;
        return 'All Cars have only ' . self::$countWheel . '!' . PHP_EOL;
    }

    public function start()
    {
        if ($this->getSpeed() > 0) {
            parent::start();
        } else {
            return $this->engine->starter()."Increase the speed!" . PHP_EOL;
        }
    }

    public function stop()
    {
        parent::stop();
        return "Car " . $this->getName() . " stop moving!" . PHP_EOL.$this->engine->ender();

    }

}
