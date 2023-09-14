<?php

abstract class Bebida
{
    protected $medida;

    public function __construct($medida)
    {
        $this->medida = $medida;
    }

    abstract public function calculaCaloria();
}