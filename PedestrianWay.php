<?php
include_once 'MotorWay.php';

final class PedestrianWay extends MotorWay { 

    private $nbLane = 1;
    private $maxSpeed=10;

    public function addVehicle(Vehicle $vehicle){

            $this->currentVehicles[] = $vehicle;
        
    }

} 