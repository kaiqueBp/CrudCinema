<?php

include_once("utils/db.php");

class Usuario
{
    private $usuarios;
    private $conn;

    public function __construct()
    {
        $db = DatabaseSingleton::getInstance();
        $this->conn = $db->getConnection();
    }

    public function registrarUsuarios($nome, $email, $senha)
    {
        //Verificar se o email já está em uso
        if ($this->existeEmail($email)) {
            return false;
        }

        $stmt = $this->conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?,?,?)");

        if (!$stmt) {
            die("Error: " . $this->conn->error);
        }

        $stmt->bind_param("sss", $nome, $email, $senha);

        $senha = password_hash($senha, PASSWORD_DEFAULT);

        $stmt->execute();

        return true;
    }

    private function existeEmail($email)
    {
        $query = "SELECT email FROM usuarios";

        $result = $this->conn->query($query);

        while ($row = $result->fetch_assoc()) {
            if ($row['email'] == $email) {
                return true;
            }
        }
        return false;
    }

    public function autenticaUsuario($email, $senha)
    {
        $query = "SELECT nome, email, senha FROM usuarios";

        $result = $this->conn->query($query);

        while ($row = $result->fetch_assoc()) {
            if ($row['email'] === $email && password_verify($senha, $row['senha'])) {
                $usuario = ['nome' => $row['nome'], 'email' => $row['email']];
                return (object) $usuario;
            }
        }
        return null;
    }

    public function atualizaUsuarios($nome, $email)
    {
        $query = "UPDATE usuarios SET nome='$nome' WHERE email='$email'";

        $result = $this->conn->query($query);

        if ($result === TRUE) {
            if ($this->conn->affected_rows == 1) {
                return true;
            }else{
                return false;
            }
        } else {
            return false;
        }
    }

    public function deletaUsuarios($email){
        $query = "DELETE FROM usuarios WHERE email='$email'";

        $result = $this->conn->query($query);

        if ($result === TRUE) {
            if ($this->conn->affected_rows == 1) {
                return true;
            }else{
                return false;
            }
        } else {
            return false;
        }
    }
}
