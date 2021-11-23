<?php
require_once 'RechargeableInterface.php';

class ChargingStation
{
    public function FullCharge(RechargeableInterface $vehicle)
    {
        $vehicle->charge(100);
    }
}

?> 