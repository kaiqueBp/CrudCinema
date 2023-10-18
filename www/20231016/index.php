<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registro do Usuário</h1>
    <form action="registro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" require><br>
        <label for="email">E-mail:</label>
        <input type="text" name="email" require><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" require><br>
        <input type="submit" value="Registrar">
    </form>
</body>

</html>