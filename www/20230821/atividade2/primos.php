<?php

$primos = array();

$numero = 2;

$file = fopen("numeros.txt", "w+");
$fileJson = fopen("numerosJSON.txt", "w+");

while (count($primos) < 20) {
    $divisores = 0;

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $divisores++;
        }
    }

    if (!$divisores) {
        if(count($primos)==0){
            fwrite($file, "$numero"); 
        }else{
            fwrite($file, "\n$numero");
        }        
        array_push($primos, $numero);
    }
    $numero++;
}

fwrite($fileJson, json_encode($primos));

fclose($file);
fclose($fileJson);
