<?php

use App\model\CinemaModel;
use PHPUnit\Framework\TestCase;
session_start();

class CinemaModelTest extends TestCase
{
    private $cinemaModel;

    protected function setUp(): void
    {
        $this->cinemaModel = new CinemaModel();
    }

    public function testSalvar()
    {
        $nome = "Cinema Teste";
        $endereco = "Endereço Teste";
        $capacidade = 100;
        $qntSala = 5;

       $this->cinemaModel->salvar($nome, $endereco, $capacidade, $qntSala);

        $this->assertEquals($_SESSION['mensagem'], "Cinema salvo com sucesso!");
    }

    public function testDeletar()
    {
        $id = 1; 

        $this->cinemaModel->deletar($id);

        $this->assertEquals($_SESSION['mensagem'], "Cinema deletado com sucesso!");
    }

    public function testAtualizar()
    {
        $id = 1;
        $nome = "Cinema Teste Atualizado";
        $endereco = "Endereço Teste Atualizado";
        $capacidade = 200;
        $qntSala = 10;

        $this->cinemaModel->atualizar($id, $nome, $endereco, $capacidade, $qntSala);

        $this->assertEquals($_SESSION['mensagem'], "Cinema atualizado com sucesso!");
    }

    public function testList()
    {
        $result = $this->cinemaModel->list();

        $this->assertIsArray($result);
    }

}
