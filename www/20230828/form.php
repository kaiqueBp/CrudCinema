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
       if(isset($_REQUEST['fname'])){
        echo "<h1>Bem vindo ".$_REQUEST['fname']."</h1>";
       }
    ?>
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
    Name: <input type="text" name="fname"><input type="submit">
    </form>
</body>
</html>