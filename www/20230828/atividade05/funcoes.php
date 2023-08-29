<?php
    function verificarValor($valor){
        if($valor>0){
            return 1;
        }else if($valor<0){
            return -1;
        }else{
            return 0;
        }
    }