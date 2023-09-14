<?php 

class Roda
{
    private $aro;
    

    /**
     * Get the value of aro
     */ 
    public function getAro()
    {
        return $this->aro;
    }

    /**
     * Set the value of aro
     *
     * @return  self
     */ 
    public function setAro($aro)
    {
        $this->aro = $aro;

        return $this;
    }
}