<?php

include_once("bebida.class.php");

class Refrigerante extends Bebida
{
    public function calculaCaloria()
    {
        if($this->medida === 300){
            return 200;
        }elseif ($this->medida === 500){
            return 350;
        }
    }
}