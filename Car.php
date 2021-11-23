<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements Lightable
{
    
    public const ALLOWED_ENERGIES=[
        'fuel',
        'electric',
    ];
    
    private bool $hasParkBrake= true;
    private string $energy;
    private int $energyLevel;
    private $light;



        
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
    public function switchOn(): bool
    {
        if($this->currentSpeed > 10) {
            return $this->light = true;
        } else{
            return $this->light = false;
        }
    }

    public function switchOff(): bool
    {
        return $this->light = false;
    }

    /**
     * Get the value of light
     */ 
    public function getLight():bool 
    {
        return $this->light;
    }

    /**
     * Set the value of light
     *
     * @return  self
     */ 
    public function setLight($light):void
    {
        $this->light = $light;

    }
}

?>