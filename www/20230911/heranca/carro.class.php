<?php

include_once("veiculo.class.php");

class Carro extends Veiculo
{
    protected $tipocarro;

    /**
     * Get the value of tipocarro
     */ 
    public function getTipocarro()
    {
        return $this->tipocarro;
    }

    /**
     * Set the value of tipocarro
     *
     * @return  self
     */ 
    public function setTipocarro($tipocarro)
    {
        $this->tipocarro = $tipocarro;

        return $this;
    }
}