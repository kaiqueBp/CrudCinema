<?php

class Chassi
{
    private $vin;
    

    /**
     * Get the value of vin
     */ 
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * Set the value of vin
     *
     * @return  self
     */ 
    public function setVin($vin)
    {
        $this->vin = $vin;

        return $this;
    }
}