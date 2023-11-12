<?php
    use PHPUnit\Framework\TestCase;

    use App\model\Usuario;
    use App\controller\LoginController;

    class LoginTest extends TestCase{
        protected $usuario;
        private $conn;
    
    protected function setUp(): void
    {
        $this->conn = new \mysqli("db-mysql", "root", "root", "teste");
        $this->usuario = new Usuario($this->conn);
    }
        public function testLoginComCredenciaisValidas(){
            
            $this->usuario->inserirUsuario('usuario@test.com','senha123');
            
            $controller = new LoginController($this->usuario);
            $resultado = $controller->login('usuario@test.com','senha123');

            $this->assertTrue($resultado);

        }

        public function testLoginComCredenciaisInvalidas(){
            $this->usuario->inserirUsuario('usuario@test.com','senha123');
            
            $controller = new LoginController($this->usuario);
            $resultado = $controller->login('usuario@test.com','senha_incorreta');

            $this->assertFalse($resultado);
        }
    }