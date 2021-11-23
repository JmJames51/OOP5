<?php

include_once 'Vehicle.php';


abstract class HighWay { 

        protected array $currentVehicles;
        protected int $nbLane;
        protected int $maxSpeed;

        public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed){ 

            $this->getCurrentVehicles = $currentVehicles;
            $this->nbLane = $nbLane;
            $this->maxSpeed= $maxSpeed;

        }

        abstract public function addVehicle(Vehicle $vehicle);


        /**
         * Get the value of currentVehicles
         */ 
        public function getCurrentVehicles(): array
        {
                return $this->currentVehicles;
        }

        /**
         * Set the value of currentVehicles
         *
         * @return  self
         */ 
        public function setCurrentVehicles(array $currentVehicles): void
        {
                $this->currentVehicles = $currentVehicles;

        }

        /**
         * Get the value of nbLane
         */ 
        public function getNbLane():int
        {
                return $this->nbLane;
        }

        /**
         * Set the value of nbLane
         *
         * @return  self
         */ 
        public function setNbLane(int $nbLane): void
        {
                $this->nbLane = $nbLane;

        }

        /**
         * Get the value of maxSpeed
         */ 
        public function getMaxSpeed(): int 
        {
                return $this->maxSpeed;
        }

        /**
         * Set the value of maxSpeed
         *
         * @return  self
         */ 
        public function setMaxSpeed(int $maxSpeed):void 
        {
                $this->maxSpeed = $maxSpeed;

        }
}

?>