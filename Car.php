<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{
    
    public const ALLOWED_ENERGIES=[
        'fuel',
        'electric',
    ];
    
    private bool $hasParkBrake= true;
    private string $energy;
    private int $energyLevel;

        
    public function __construct(string $color ,int $nbSeats, string $energy )
    {
            parent::__construct($color , $nbSeats);
            $this->energy= $energy;
    }
    public function start()
    {
            if ($this->hasParkBrake) {
                throw new Exception("Ton frein a main est levé");
            }
    }


    /**
     * Get the value of energyLevel
     */ 
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * Set the value of energyLevel
     *
     * @return  self
     */ 
    public function setEnergyLevel(int $energyLevel):void 
    {
        
        $this->energyLevel = $energyLevel;

       
    }

    /**
     * Get the value of energy
     */ 
    public function getEnergy():string 
    {
        return $this->energy;
    }

    /**
     * Set the value of energy
     *
     * @return  self
     */ 
    public function setEnergy(string $energy): Car 
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
        $this->energy = $energy;
        }
        return $this;
     
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setHasParkBrake(bool $hasParkBrake):void
    {
        $this->hasParkBrake = $hasParkBrake;

    }
}

?>