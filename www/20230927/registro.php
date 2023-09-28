<?php
    require_once('models/usuario.class.php');

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuario = new Usuario();
        $registro = $usuario->registrarUsuarios($nome,$email,$senha);

        if($registro){
            echo "Registro bem-sucedido. <a href='login.php'>Faça o login</a>";
        }else{
            echo "Erro ao registrar o usuário. <a href='index.php'>Tente novamente</a>";
        }
    }