<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

require_once('models/usuario.class.php');

$usuario = new Usuario();
$deletar = $usuario->deletaUsuarios($_SESSION['usuario']->email);

if ($deletar) {
    header('Location: logout.php');
} else {
    header('Location: welcome.php');
}
