<?php
require_once 'Vehicle.php';

class Truck extends Vehicle 
{ 
    private int $capacity;
    private int $load;
    private string $energy;

    public function __construct(string $color ,int $nbSeats, string $energy, int $capacity , int $load)
    {
        parent::__construct($color , $nbSeats);
        $this->energy= $energy;
        $this->load=$load;
        $this->capacity=$capacity;
        
    }


    /**
     * Get the value of capacity
     */ 
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @return  self
     */ 
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get the value of load
     */ 
    public function getLoad()
    {
        return $this->load;
    }

    /**
     * Set the value of load
     *
     * @return  self
     */ 
    public function setLoad($load)
    {
        $this->load = $load;

        return $this;
    }

    public function loadControl()
    {
        if($this->load >= $this->capacity){
            return 'Full capacity, can\'t load more';
        }else{
            return 'Not full, you can still load';
        }
    }
}



?> 