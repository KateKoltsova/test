<?php

namespace oop;

class Driver
{
    private string $name;
    private int $age;
    private string $sex;
    private const SEX_MALE = 'Man';
    private const SEX_FEMALE = 'Woman';

    public function __construct($name, $age, $sex)
    {
        $this->name = $name;
        $this->age = $age;
        in_array($sex, [self::SEX_MALE, self::SEX_FEMALE]) ? $this->sex = $sex : "";
    }

    public function getDriverInfo()
    {
        return "Driver's name is " . $this->name . ", " . ('Man' ? 'he' : 'she') . " is a $this->age years old $this->sex!" . PHP_EOL;
    }

    public function driveVehicle(MovableInterface $movable, $unit = 0, $flagMove = 'start', $flagSpeed = 'up')
    {
        if ($flagMove == 'start') {
            echo "Driver $this->name want to drive this Vehicle!" . PHP_EOL;
            echo $movable->start();
        } elseif ($flagMove == 'end') {
            echo $movable->stop();
        }
        if ($flagSpeed == 'up') {
            echo $movable->up($unit);
        } elseif ($flagSpeed == 'down') {
            echo $movable->down($unit);
        }
    }

}