<?php

class Motorista
{
    private $nome;
    private $cnh;

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cnh
     */ 
    public function getCnh()
    {
        return $this->cnh;
    }

    /**
     * Set the value of cnh
     *
     * @return  self
     */ 
    public function setCnh($cnh)
    {
        $this->cnh = $cnh;

        return $this;
    }
}