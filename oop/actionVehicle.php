<?php

use oop\Car;
use oop\Truck;
use oop\Motorcycle;
use oop\MovableInterface;

require_once __DIR__.'/../autoloader.php';

function move(MovableInterface $movable, $flag = 'start')
{
    switch ($flag) {
        case 'start' :
            return $movable->start();
        case 'end' :
            return $movable->stop();
    }
}

function speed(MovableInterface $movable, $unit, $flag = 'up')
{
    switch ($flag) {
        case 'up' :
            return $movable->up($unit);
        case 'down' :
            return $movable->down($unit);
    }
}

$car = new Car ('Krusty', 100);
echo $car->setCountry();
echo $car->setCountWheel();
echo move($car, 'start');
echo speed($car, 40, 'up');
echo speed($car, 70, 'up');
echo speed($car, 30, 'down');
echo move($car, 'end');

echo PHP_EOL;

$truck = new Truck('Krabs', 100);
echo $truck->setCountry();
echo $truck->setCountWheel();
echo move($truck, 'start');
echo speed($truck, 40, 'up');
echo speed($truck, 70, 'up');
echo speed($truck, 30, 'down');
echo move($truck, 'end');

echo PHP_EOL;

$motorcycle = new Motorcycle('Squidward', 100);
echo $motorcycle->setCountry();
echo $motorcycle->setCountWheel();
echo move($motorcycle, 'start');
echo speed($motorcycle, 40, 'up');
echo speed($motorcycle, 70, 'up');
echo speed($motorcycle, 30, 'down');
echo move($motorcycle, 'end');
