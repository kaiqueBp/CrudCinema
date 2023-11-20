<?php
    namespace App\controller;

use App\model\CinemaModel;

    class Controller{
        private $cinema;

        public function __construct() {
            $this->cinema = new CinemaModel();
        }
    
        public function salvar($nome, $endereco, $capacidade, $numeroSala) {
            $this->cinema->salvar($nome, $endereco, $capacidade, $numeroSala);
        }
        public function deletarCinema($id) {
            $this->cinema->deletar($id);
        }
        public function listar(){
            return $this->cinema->list();
        }
        
        public function atualiza($id, $nome, $endereco, $capacidade, $qntSala) {
            $this->cinema->atualizar($id, $nome, $endereco, $capacidade, $qntSala);
        }

        public function getId($id){
            return $this->cinema->exibirId($id);
        }
      
    
    }