<?php

    $myfile = fopen("texto.txt","r");
    $counterfile = fopen("count.txt","w+");

    while(!feof($myfile)){
        $linha = fgets($myfile);
        echo "$linha<br><br>";
        $arr = explode(" ",$linha);
        fwrite($counterfile,count($arr)." palavras\n");
    }

    fclose($myfile);
    fclose($counterfile);