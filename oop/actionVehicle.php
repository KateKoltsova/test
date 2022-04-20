<?php

require_once 'car.php';
require_once 'truck.php';
require_once 'motorcycle.php';

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
echo move($car, 'start');
echo speed($car, 40, 'up');
echo speed($car, 70, 'up');
echo speed($car, 30, 'down');
echo move($car, 'end');

$truck = new Truck('Krabs', 100);
echo move($truck, 'start');
echo speed($truck, 40, 'up');
echo speed($truck, 70, 'up');
echo speed($truck, 30, 'down');
echo move($truck, 'end');

$motorcycle = new Motorcycle('Squidward', 100);
echo move($motorcycle, 'start');
echo speed($motorcycle, 40, 'up');
echo speed($motorcycle, 70, 'up');
echo speed($motorcycle, 30, 'down');
echo move($motorcycle, 'end');
