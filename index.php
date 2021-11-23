<?php
require 'Car.php';


$car= new Car('yellow', 4, 'electric');

try{
    $car->start();
} catch (Exception $e) { 
    $car->setHasParkbrake(false);
    echo $e->getMessage();
} finally { 
    echo "Ma voiture roule comme un donut!";
}
?>