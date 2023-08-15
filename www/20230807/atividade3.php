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
        $x = rand(500000,1000000);
        $y = rand(500000,1000000);

        $inicio = microtime(true);
        $div_x = array();
        $div_y = array();

        for($i=2;$i<=$x;$i++){
            if($x%$i==0){
                array_push($div_x,$i);
            }
        }
        for($i=2;$i<=$y;$i++){
            if($y%$i==0){
                array_push($div_y,$i);
            }
        }
        $meio = microtime(true);
        echo "<h2>Divisores de $x</h2>";
        print_r($div_x);
        echo "<h2>Divisores de $y</h2>";
        print_r($div_y);


        $maior = 1;
        for($i=0;$i<count($div_x);$i++){
            for($j=0;$j<count($div_y);$j++){
                if($div_x[$i]==$div_y[$j]){
                    $maior = $div_x[$i];
                }
            }
        }
        $fim = microtime(true);
        $tempo_meio = $meio - $inicio;
        $tempo = $fim - $meio;
        echo "<h2>O MDC de $x e $y é $maior</h2>";
        printf("<h3>Primeira parte processada em: %0.16f segundos</h3>", $tempo_meio/1000000);
        printf("<h3>Segunda parte processada em: %0.16f segundos</h3>", $tempo/1000000);

        $inicio = microtime(true);
        $a = $x < $y ? $y : $x;
        $b = $x > $y ? $y : $x;

        while($b != 0){
            $i = $a % $b;
            $a = $b;
            $b = $i;
            
        }
        $fim = microtime(true);
        $tempo = $fim - $inicio;
        echo "<h2>O MDC de euclides de $x e $y é $a</h2>";
        printf("<h3>Processado em: %0.16f segundos</h3>", $tempo/1000000);
    ?>
</body>
</html>