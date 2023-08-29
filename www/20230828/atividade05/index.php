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
    include('funcoes.php');

    $valor = filter_input(INPUT_GET, 'valor', FILTER_VALIDATE_INT);
    
    if ($valor !== false && isset($_GET['valor'])) {
        $resultado = verificarValor($valor);
        echo "<h1>";
        if ($resultado == 1) {
            echo "POSITIVO";
        } else if ($resultado == -1) {
            echo "NEGATIVO";
        } else {
            echo "ZERO";
        }
        echo "</h1>";
    } else {
        echo "<h1>Valor Inválido</h1>";
    }
    ?>
</body>

</html>