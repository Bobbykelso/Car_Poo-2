<?php

require_once "src/Bicycle.php";
require_once "src/Cars.php";
require_once 'src/Truck.php';

$myTruck = new Truck('white', 6, 'essence', 100);

var_dump($bestTruck);

$myTruck->setLoading(20);
echo $myTruck->getLoading() . "<br>";
echo $myTruck->getEmptyCapacity();

var_dump($myTruck);

echo $myTruck->setCurrentSpeed(100) .'<br>';
echo $myTruck->brake();
echo $myTruck->brake() . '<br>'  ;

// $bicycle = new Bicycle('blue', 1);
// echo $bicycle->forward();
// var_dump($bicycle);

// $car = new Car('green', 4, 'electric');
// echo $car->forward();
// var_dump($car);
