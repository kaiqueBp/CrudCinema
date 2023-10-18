<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

require_once('models/usuario.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];

    $usuario = new Usuario();
    $atualizar = $usuario->atualizaUsuarios($nome, $_SESSION['usuario']->email);

    if ($atualizar) {
        $_SESSION['usuario']->nome = $nome;
    } 

    header('Location: welcome.php');
}
