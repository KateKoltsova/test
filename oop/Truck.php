<?php

namespace oop;

class Truck extends Vehicle
{
    protected const COUNTRY_KANADA = 'Kanada';
    protected const COUNT_WHEEL_EIGHT = 8;

    public static function setCountry()
    {
        self::$country = self::COUNTRY_KANADA;
        return 'All Trucks made in ' . self::$country . '!' . PHP_EOL;
    }

    public static function setCountWheel(){
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
