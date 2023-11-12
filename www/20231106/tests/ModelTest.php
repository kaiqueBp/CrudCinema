<?php
    use PHPUnit\Framework\TestCase;
    use App\model\Usuario;

class ModelTest extends TestCase{
    protected $usuario;
    private $conn;

protected function setUp(): void
{
    $this->conn = new \mysqli("db-mysql", "root", "root", "teste");
    $this->usuario = new Usuario($this->conn);
}

public function testInserirUsuario()
{
    $email = 'Kaique@example.com';
    $senha = 'senha12345';

    $result = $this->usuario->inserirUsuario($email, $senha);

    $this->assertTrue($result, 'Falha ao inserir usuário');
}

public function testAutenticaUsuarioComCredenciaisValidas()
{
    $email = 'Kaique@example.com';
    $senha = 'senha12345';

    $this->usuario->inserirUsuario($email, $senha);

    $usuarioAutenticado = $this->usuario->autenticaUsuario($email, $senha);

    $this->assertNotNull($usuarioAutenticado, 'Falha ao autenticar');
    $this->assertEquals($email, $usuarioAutenticado->email, 'Email do usuário incorreto');

}
}