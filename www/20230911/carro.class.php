<?php

include_once("motorista.class.php");
include_once("roda.class.php");
include_once("chassi.class.php");

class Carro
{
    private $modelo;
    private $motorista;
    private $rodas;
    private $chassi;

    public function __construct()
    {
        $this->motorista = new Motorista();
        $this->rodas = array();
        for($i=0;$i<5;$i++){
            array_push($this->rodas, new Roda);
        }
        $this->chassi = new Chassi();
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of motorista
     */ 
    public function getMotorista()
    {
        return $this->motorista;
    }

    /**
     * Set the value of motorista
     *
     * @return  self
     */ 
    public function setMotorista($motorista)
    {
        $this->motorista = $motorista;

        return $this;
    }

    /**
     * Get the value of rodas
     */ 
    public function getRodas()
    {
        return $this->rodas;
    }

    /**
     * Set the value of rodas
     *
     * @return  self
     */ 
    public function setRodas($rodas)
    {
        $this->rodas = $rodas;

        return $this;
    }

    /**
     * Get the value of chassi
     */ 
    public function getChassi()
    {
        return $this->chassi;
    }

    /**
     * Set the value of chassi
     *
     * @return  self
     */ 
    public function setChassi($chassi)
    {
        $this->chassi = $chassi;

        return $this;
    }
}