<?php

include_once("imc.class.php");

$obj = [];

array_push($obj, new Imc());
array_push($obj, new Imc());

$obj[0]->setNome("Felipe");
$obj[0]->setAltura(1.75);
$obj[0]->setPeso(95);

$obj[0]->setIMC();

$obj[1]->setNome("Mateus");
$obj[1]->setAltura(1.65);
$obj[1]->setPeso(65);

$obj[1]->setIMC();

for ($i = 0; $i < count($obj); $i++) {
    echo $obj[$i]->getNome() . " tem classificação " . $obj[$i]->getClassificacao() . " e tem grau " . $obj[$i]->getGrau()."<br>";
}
