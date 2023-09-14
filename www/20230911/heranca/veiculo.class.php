<?php

class Veiculo
{
    protected $nrodas;
    protected $npassageiros;
    

    /**
     * Get the value of nrodas
     */ 
    public function getNrodas()
    {
        return $this->nrodas;
    }

    /**
     * Set the value of nrodas
     *
     * @return  self
     */ 
    public function setNrodas($nrodas)
    {
        $this->nrodas = $nrodas;

        return $this;
    }

    /**
     * Get the value of npassageiros
     */ 
    public function getNpassageiros()
    {
        return $this->npassageiros;
    }

    /**
     * Set the value of npassageiros
     *
     * @return  self
     */ 
    public function setNpassageiros($npassageiros)
    {
        $this->npassageiros = $npassageiros;

        return $this;
    }
}