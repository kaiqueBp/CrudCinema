<?php

$file = fopen("numeros.txt","r");

$soma = 0;

while(!feof($file)){
    $soma += fgets($file);
}

echo $soma;

fclose($file);


$file = fopen("numerosJSON.txt","r");

while(!feof($file)){
    $json = json_decode(fgets($file));
}

echo array_sum($json);

fclose($file);