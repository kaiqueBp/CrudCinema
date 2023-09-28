<?php
session_start();
require_once('models/usuario.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = new Usuario();
    $autenticado = $usuario->autenticaUsuario($email, $senha);

    if ($autenticado) {
        $_SESSION['usuario'] = $autenticado;
        header('Location: welcome.php');
        exit();
    }else{
        echo "Credenciais inválidas. <a href='login.php'>Tente novamente</a>";
    }
}
