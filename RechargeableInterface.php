<?php
interface RechargeableInterface
{ 
    public function charge(int $percentage);
    public function unLoad(int $percentage);
    
}