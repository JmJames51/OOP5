<?php
include_once 'MotorWay.php';
include_once 'Bicycle.php';

final class ResidentialWay extends MotorWay { 

    private $nbLane = 2;
    private $maxSpeed=50;

    public function addVehicle(Vehicle $vehicle){
        if ($vehicle instanceof Bicycle) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}