<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr = array();
        for($i=0;$i<rand(3,5);$i++){
            array_push($arr,rand(0,1));
        }

        $inicio = microtime(true);
        $decimal = 0;
        $length = count($arr);

        for($i=$length-1;$i>=0;$i--){
            $bit = $arr[$length - 1 - $i];
            $decimal += $bit * pow(2,$i);
        }

        $fim = microtime(true);
        $tempo = $fim - $inicio;

        $bin = implode("",$arr);
        echo "<h2>Numero binario $bin</h2>";
        echo "<h2>Numero decimal $decimal</h2>";
        printf("<h3>Processado em: %0.16f segundos</h3>", $tempo/1000000);


        $inicio = microtime(true);
        $decimal = array_reduce($arr,function ($carry,$bit){
            $turn = $carry * 2 + $bit;
            return $turn;
        },0);
        $fim = microtime(true);
        $tempo = $fim - $inicio;

        echo "<h2>Numero decimal $decimal</h2>";
        printf("<h3>Processado em: %0.16f segundos</h3>", $tempo/1000000);

        $inicio = microtime(true);
        $decimal = bindec($bin);
        $fim = microtime(true);
        $tempo = $fim - $inicio;

        echo "<h2>Numero decimal $decimal</h2>";
        printf("<h3>Processado em: %0.16f segundos</h3>", $tempo/1000000);

    ?>
</body>
</html>