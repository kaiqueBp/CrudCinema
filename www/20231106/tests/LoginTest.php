<?php
    use PHPUnit\Framework\TestCase;

    use App\model\Usuario;
    use App\controller\LoginController;

    class LoginTest extends TestCase{
        public function testLoginComCredenciaisValidas(){
            $usuario = new Usuario();
            $usuario->inserirUsuario('usuario@test.com','senha123');
            
            $controller = new LoginController($usuario);
            $resultado = $controller->login('usuario@test.com','senha123');

            $this->assertTrue($resultado);

            $usuario->inserirUsuario('usuario@test.com','senha1234');
            
            $resultado = $controller->login('usuario@test.com','senha1234');

            $this->assertTrue($resultado);
        }

        public function testLoginComCredenciaisInvalidas(){
            $usuario = new Usuario();
            $usuario->inserirUsuario('usuario@test.com','senha123');
            
            $controller = new LoginController($usuario);
            $resultado = $controller->login('usuario@test.com','senha_incorreta');

            $this->assertFalse($resultado);
        }
    }
