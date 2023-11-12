<?php
        namespace App\model;
    class Usuario{
        protected $usuario;
        private $conn;

        public function __construct($conexao)
        {
            $this->conn = $conexao;
        }
    
        public function inserirUsuario( $email, $senha)
        {
            $stmt = $this->conn->prepare("INSERT INTO usuarios (email, senha) VALUES (?,?)");
    
            if (!$stmt) {
                die("Error: " . $this->conn->error);
            }
    
            $stmt->bind_param("ss", $email, $senha);
    
            $senha = password_hash($senha, PASSWORD_DEFAULT);
    
            $stmt->execute();
    
            return true;
        }
        public function autenticaUsuario($email, $senha)
    {
        $query = "SELECT email, senha FROM usuarios";

        $result = $this->conn->query($query);

        while ($row = $result->fetch_assoc()) {
            if ($row['email'] === $email && password_verify($senha, $row['senha'])) {
                $usuario = ['email' => $row['email']];
                return (object) $usuario;
            }
        }
        return null;
    }

    }