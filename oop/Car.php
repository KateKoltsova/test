<?php

namespace oop;

class Car extends Vehicle
{
    protected const COUNTRY_USA = 'USA';

    public static function setCountry()
    {
        self::$country = self::COUNTRY_USA;
        return 'All Cars made in ' . self::$country . '!' . PHP_EOL;
    }

    public static function setCountWheel(){
        self::$countWheel = 4;
        return 'All Cars have only ' . self::$countWheel . '!' . PHP_EOL;
    }

    public function start()
    {
        if ($this->getSpeed() > 0) {
            parent::start();
        } else {
            return "Name of this Car is " . $this->getName() . ". Car is ready to move. Increase the speed!" . PHP_EOL;
        }
    }

    public function stop()
    {
        parent::stop();
        return "Car " . $this->getName() . " stop moving!" . PHP_EOL;

    }
}
