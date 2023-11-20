<?php

use App\controller\Controller;
use PHPUnit\Framework\TestCase;
session_start();

class CinemaControllerTest extends TestCase
{
    private $controller;

    protected function setUp(): void
    {
        $this->controller = new Controller();
    }
    public function testSalvar()
    {
        $nome = 'Cinema Teste';
        $endereco = 'Rua Teste, 123';
        $capacidade = 100;
        $numeroSala = 5;

        $this->controller->salvar($nome, $endereco, $capacidade, $numeroSala);
        $this->assertEquals($_SESSION['mensagem'], "Cinema salvo com sucesso!");
    }
    public function testDeletarCinema()
    {
        $id = 1;
        $this->controller->deletarCinema($id);

        $this->assertEquals($_SESSION['mensagem'], "Cinema deletado com sucesso!");
    }

    public function testListar()
    {
        $this->assertIsArray($this->controller->listar());
    }

    public function testAtualiza()
    {
        $id = 1;
        $nome = 'Cinema Teste Atualizado';
        $endereco = 'Rua Teste, 456';
        $capacidade = 200;
        $qntSala = 10;

        $this->controller->atualiza($id, $nome, $endereco, $capacidade, $qntSala);
          $this->assertEquals($_SESSION['mensagem'], "Cinema atualizado com sucesso!");
    }

    public function testGetId()
    {
        $id = 2;
        $this->assertIsArray($this->controller->getId($id));
    }
}
