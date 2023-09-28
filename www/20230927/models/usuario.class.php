<?php

class Usuario
{
    private $usuarios;

    public function __construct()
    {
        $this->carregarUsuarios();
    }

    public function carregarUsuarios()
    {
        $jsonDados = file_get_contents('usuarios.json');
        $this->usuarios = json_decode($jsonDados);
    }

    public function registrarUsuarios($nome, $email, $senha)
    {
        //Verificar se o email já está em uso
        if ($this->existeEmail($email)) {
            return false;
        }

        $novoUsuario = [
            'id' => $this->geraNovoId(),
            'nome' => $nome,
            'email' => $email,
            'senha' => password_hash($senha, PASSWORD_DEFAULT),
        ];

        $this->usuarios[] = $novoUsuario;

        $this->salvarUsuarios();

        return true;
    }

    private function existeEmail($email)
    {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->email == $email) {
                return true;
            }
        }
        return false;
    }

    private function geraNovoId()
    {
        return count($this->usuarios) + 1;
    }

    private function salvarUsuarios()
    {
        $jsonDados = json_encode($this->usuarios, JSON_PRETTY_PRINT);
        file_put_contents('usuarios.json', $jsonDados);
    }


    public function autenticaUsuario($email, $senha){
        foreach ($this->usuarios as $usuario) {
            if ($usuario->email === $email && password_verify($senha, $usuario->senha)) {
                unset($usuario->senha);
                return (object) $usuario;
            }
        }
        return null;
    }
}
