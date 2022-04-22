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
}