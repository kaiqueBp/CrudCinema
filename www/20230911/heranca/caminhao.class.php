<?php

include_once("veiculo.class.php");

class Caminhao extends Veiculo
{
    protected $carga;

    /**
     * Get the value of carga
     */ 
    public function getCarga()
    {
        return $this->carga;
    }

    /**
     * Set the value of carga
     *
     * @return  self
     */ 
    public function setCarga($carga)
    {
        $this->carga = $carga;

        return $this;
    }
}