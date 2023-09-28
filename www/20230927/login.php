<?php
session_start();
if(isset($_SESSION['usuario'])){
    header('Location: welcome.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
    <form action="autenticacao.php" method="post">
        <label for="email">E-mail:</label>
        <input type="text" name="email" require><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" require><br>
        <input type="submit" value="Entrar">
    </form>
</body>

</html>