<?php

include_once("bebida.class.php");

class Suco extends Bebida
{
    public function calculaCaloria()
    {
        if($this->medida === 300){
            return 150;
        }elseif ($this->medida === 500){
            return 250;
        }
    }
}