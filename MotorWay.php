<?php
include_once 'HighWay.php';

final class MotorWay extends HighWay{
        
    private $nbLane = 4;
    private $maxSpeed = 130;


    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}