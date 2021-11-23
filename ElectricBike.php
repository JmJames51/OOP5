<?php
require_once 'vehicle.php';
require_once 'LightableInterface.php';


class ElectricBike extends vehicle implements Lightable
{ 
    public function charge(int $percentage):int 
    {

    }

    public function unLoad(int $percentage):int 
    { 

    }

}


?>