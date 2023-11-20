<?php

use App\controller\Controller;
use App\model\CinemaModel;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['salvar'])) {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $capacidade = $_POST['capacidade'];
    $numeroSala = $_POST['numeroSala'];
    $controlador = new Controller();
    $controlador->salvar($nome, $endereco, $capacidade, $numeroSala);
}
if(!empty($_GET['id']) && $_GET['action'] == 'delete'){
    $idCinema = $_GET['id'];
    $controlador = new Controller();
    $controlador->deletarCinema($idCinema);
}
if(!empty($_GET['id']) && $_GET['action'] == 'edit'){
    $idCinema = $_GET['id'];
    $controller = new CinemaModel;
    $cinemas = $controller->exibirId( $idCinema);
    foreach ($cinemas as $_POST){
        $id = $_POST['id'];
        $n = $_POST['nomeCinema'];
        $e = $_POST['endereco'];
        $c = $_POST['capacidade'];
        $ns = $_POST['quantidadeSala'];
    }
}
if (isset($_POST['atualizar'])) {
    $i = $_POST['id'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $capacidade = $_POST['capacidade'];
    $numeroSala = $_POST['numeroSala'];
    $controlador = new Controller;
    $controlador->atualiza($nome, $endereco,$capacidade,$numeroSala,$i);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cinema</title>
</head>
<body>
    <h1>Adicionar Cinema</h1>
    <form action="index.php" method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" value="<?php echo $n ?>" required><br>
    <label for="endereco">Endereço:</label><br>
    <input type="text" id="endereco" name="endereco" value="<?php echo $e ?>" required><br>
    <label for="capacidade">Capacidade:</label><br>
    <input type="number" id="capacidade" name="capacidade" min="1" value="<?php echo $c ?>" required><br>
    <label for="numeroSala">Número de Salas:</label><br>
    <input type="number" id="numeroSala" name="numeroSala" min="1" value="<?php echo $ns ?>" required><br>
    <input type="submit" name="salvar" value="Adicionar">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" name="atualizar" value="Atualizar">
</form>
    <h1>Dados do Cinema</h1>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Capacidade</th>
            <th>Número de Salas</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $controller = new Controller();
    $cinemas = $controller->listar();
    foreach ($cinemas as $cinema) : ?>
        <tr>
            <td><?= $cinema['id'] ?></td>
            <td><?= $cinema['nomeCinema'] ?></td>
            <td><?= $cinema['endereco'] ?></td>
            <td><?= $cinema['capacidade'] ?></td>
            <td><?= $cinema['quantidadeSala'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $cinema['id'] ?>">Editar</a> |
                <a href="index.php?action=delete&id=<?= $cinema['id'] ?>" onclick="return confirm('Deseja realmente excluir este cinema?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>