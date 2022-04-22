<?php

use oop\Driver;
use oop\Engine;
use oop\Car;
use oop\Truck;
use oop\Motorcycle;
use oop\MovableInterface;

require_once '../autoloader.php';

//    function move(MovableInterface $movable, $flag = 'start')
//    {
//        switch ($flag) {
//            case 'start' :
//                return $movable->start();
//            case 'end' :
//                return $movable->stop();
//        }
//    }

//    function speed(MovableInterface $movable, $unit, $flag = 'up')
//    {
//        switch ($flag) {
//            case 'up' :
//                return $movable->up($unit);
//            case 'down' :
//                return $movable->down($unit);
//        }
//    }


$driver = new Driver('Mark', 43, 'Man');
echo $driver->getDriverInfo();

$engine = new Engine('Subaru', 2001);

$car = new Car ($engine, 'Krusty', 100, 'leather');
echo $driver->driveVehicle($car, 40, 'start', 'up');
echo $driver->driveVehicle($car, 70, '', 'up');
echo $driver->driveVehicle($car, 30, '', 'down');
echo $driver->driveVehicle($car, 30, 'end', '');
echo $car->getEngineInfo();
echo $car->getInteriorSize();
echo $car->getInteriorMaterial();
//echo $car->setCountry();
//echo $car->setCountWheel();
//echo move($car, 'start');
//echo speed($car, 40, 'up');
//echo speed($car, 70, 'up');
//echo speed($car, 30, 'down');
//echo move($car, 'end');
//
//echo PHP_EOL;
//
//$truck = new Truck($engine1, 'Krabs', 100, 'plastic');
//echo $truck->getEngineInfo();
//echo $truck->getInteriorSize();
//echo $truck->setCountry();
//echo $truck->setCountWheel();
//echo move($truck, 'start');
//echo speed($truck, 40, 'up');
//echo speed($truck, 70, 'up');
//echo speed($truck, 30, 'down');
//echo move($truck, 'end');
//
//echo PHP_EOL;
//
//$motorcycle = new Motorcycle($engine1, 'Squidward', 100, 'metal');
//echo $motorcycle->getEngineInfo();;
//echo $motorcycle->getInteriorSize();
//echo $motorcycle->setCountry();
//echo $motorcycle->setCountWheel();
//echo move($motorcycle, 'start');
//echo speed($motorcycle, 40, 'up');
//echo speed($motorcycle, 70, 'up');
//echo speed($motorcycle, 30, 'down');
//echo move($motorcycle, 'end');

