<?php
require_once 'LightableInterface.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'SkateBoard.php';
require_once 'Car.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
$bicycle->setCurrentSpeed(5);
echo $bicycle->switchOn();
var_dump($bicycle);


$car = new Car('green', 4, 'electric');
echo $car->forward();
echo $car->switchOn();
var_dump($bicycle);
?>