<?php
//Агрегация
namespace oop;

class Engine
{
    public int $year;
    public string $manufacturer;

    public function __construct($manufacturer, $year)
    {
        $this->manufacturer = $manufacturer;
        $this->year = $year;
    }

    public function starter()
    {
        return 'Engine is started! You can move!'.PHP_EOL;
    }

    public function ender()
    {
        return 'Engine is off! If you want move, you must started!'.PHP_EOL;
    }
}