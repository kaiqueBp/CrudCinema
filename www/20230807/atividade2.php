<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Atividade 2</h1>
    <?php
        //$arr = array(1,2,3,4,5,6,7,8,9,10);

        $arrayTempos = array();
        
        $arr = array();
        for($i=0;$i<rand(1000000,2000000);$i++){
            array_push($arr,rand(1,100));
        }

        //print_r($arr);
        
        $inicio = microtime(true);
        $sum = 0;
        for($i=0;$i<count($arr);$i++){
            $sum += $arr[$i]%2==0 ? $arr[$i] : 0;
        }
        $fim = microtime(true);
        $tempo = $fim - $inicio;
        echo "<h2>Soma com for operador terário: $sum</h2>";
        printf("<h3>Processado em: %0.16f segundos</h3>", $tempo/1000000);
        $arrayTempos["for ternario"] = $tempo;

        $inicio = microtime(true);
        $sum = 0;
        for($i=0;$i<count($arr);$i++){
            if($arr[$i]%2==0) $sum = $arr[$i];
        }
        $fim = microtime(true);
        $tempo = $fim - $inicio;
        echo "<h2>Soma com for: $sum</h2>";
        printf("<h3>Processado em: %0.16f segundos</h3>", $tempo/1000000);
        $arrayTempos["for"] = $tempo;

        $inicio = microtime(true);
        $newArr = array_map(function ($v){ return $v%2==0 ? $v : 0; },$arr);
        $sum = array_sum( $newArr);
        $fim = microtime(true);
        $tempo = $fim - $inicio;
        //print_r($newArr);
        echo "<h2>Soma com array_map e array_sum: $sum</h2>";
        printf("<h3>Processado em: %0.16f segundos</h3>", $tempo/1000000);
        $arrayTempos["array_map e array_sum"] = $tempo;

        $inicio = microtime(true);
        $newArr = array_filter($arr, function ($v){ return $v%2==0; });
        $sum = array_sum( $newArr);
        $fim = microtime(true);
        $tempo = $fim - $inicio;
        echo "<h2>Soma com for: $sum</h2>";
        //print_r($newArr);
        echo "<h2>Soma com array_filter e array_sum: $sum</h2>";
        printf("<h3>Processado em: %0.16f segundos</h3>", $tempo/1000000);
        $arrayTempos["array_filter e array_sum"] = $tempo;

        $inicio = microtime(true);
        $sum = array_reduce($arr,function ($total, $v){
            $total += $v%2==0 ? $v : 0;
            return $total; 
        },0);
        $fim = microtime(true);
        $tempo = $fim - $inicio;
        echo "<h2>Soma com array_reduce: $sum</h2>";
        printf("<h3>Processado em: %0.16f segundos</h3>", $tempo/1000000);
        $arrayTempos["array_reduce"] = $tempo;

        asort($arrayTempos);
        print_r($arrayTempos);
    ?>
</body>
</html>