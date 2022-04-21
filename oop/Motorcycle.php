<?php

namespace oop;

class Motorcycle extends Vehicle
{
    protected const COUNTRY_FRANCE = 'France';
    protected const COUNT_WHEEL_TWO = 2;

    public static function setCountry()
    {
        self::$country = self::COUNTRY_FRANCE;
        return 'All Motorcycles made in ' . self::$country . '!' . PHP_EOL;
    }

    public static function setCountWheel(){
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

