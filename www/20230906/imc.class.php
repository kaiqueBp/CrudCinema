<?php

class Imc
{
    private $nome;
    private $altura;
    private $peso;
    private $classificacao;
    private $grau;

    public function __construct()
    {
        $this->altura = 0;
        $this->peso = 0;
    }


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
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of classificacao
     */
    public function getClassificacao()
    {
        return $this->classificacao;
    }

    /**
     * Get the value of grau
     */
    public function getGrau()
    {
        return $this->grau;
    }

    public function setIMC()
    {
        if ($this->peso != 0 && $this->altura != 0) {
            $imc = $this->imc($this->altura, $this->peso);
            $this->classificacao = $imc["class"];
            $this->grau = $imc["grau"];
        }
    }

    private function imc($altura, $peso)
    {
        $imc = $peso / ($altura * $altura);
        if ($imc < 18.5) {
            $class = "MAGREZA";
            $grau = "0";
        } elseif ($imc < 24.9) {
            $class = "NORMAL";
            $grau = "0";
        } elseif ($imc < 29.9) {
            $class = "SOBREPESO";
            $grau = "I";
        } elseif ($imc < 39.9) {
            $class = "OBESIDADE";
            $grau = "II";
        } else {
            $class = "OBESIDADE GRAVE";
            $grau = "III";
        }
        return ["class" => $class, "grau" => $grau];
    }
}
