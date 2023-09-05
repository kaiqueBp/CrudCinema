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
    if (!isset($_COOKIE["cookie"])) {
        echo "<h1>O cookie não foi inicializado</h1>";
    } else {
        echo "<h1>O cookie tem valor: " . $_COOKIE["cookie"] . "</h1>";
    }
    ?>
</body>

</html>