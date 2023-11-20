<?php
        namespace App\model;
        session_start();
    class CinemaModel {
        private $conect;
      

        public function __construct()
        {
            $this->conect = new \mysqli("db-mysql", "root", "root", "teste");
        }
    
    
        public function salvar($nome, $endereco, $capacidade, $qntSala) {
            $stmt = $this->conect->prepare("INSERT INTO cinema(nomeCinema, endereco, capacidade, quantidadeSala) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssii", $nome, $endereco, $capacidade, $qntSala);
            if ($stmt->execute()) {
                // Armazene a mensagem em uma variável de sessão
                $_SESSION['mensagem'] = "Cinema salvo com sucesso!";
            } else {
                echo "Erro ao salvar o cinema: " . $stmt->error;
            }
        }
        public function deletar($id) {
            $stmt = $this->conect->prepare("DELETE FROM cinema WHERE id = ?");
            $stmt->bind_param("i", $id);
        
            if ($stmt->execute()) {
                $_SESSION['mensagem'] = "Cinema deletado com sucesso!";
            } else {
                echo "Erro ao deletar o cinema: " . $stmt->error;
            }
        }
        
        public function atualizar($nome, $endereco, $capacidade, $qntSala, $id) {
            $stmt = $this->conect->prepare("UPDATE cinema SET nomeCinema = ?, endereco = ?, capacidade = ?, quantidadeSala = ? WHERE id = ?");
            $stmt->bind_param("ssiii", $nome, $endereco, $capacidade, $qntSala, $id);
        
            if ($stmt->execute()) {
                $_SESSION['mensagem'] = "Cinema atualizado com sucesso!";
            } else {
                echo "Erro ao atualizar o cinema: " . $stmt->error;
            }
        }
        public function list() {
            $sql = "SELECT * FROM cinema";
            $result = $this->conect->query($sql);
            if ($result) {
                $cinema = $result->fetch_all(MYSQLI_ASSOC);
                return $cinema;
            } else {
                return array(); 
            }
        }
        public function exibirId($id) {
            $sql = "SELECT * FROM cinema WHERE id= $id";
            $result = $this->conect->query($sql);
            if ($result) {
                $cinema = $result->fetch_all(MYSQLI_ASSOC);
                return $cinema;
            } else {
                return array(); 
            }
        }
        
        
        
    }
