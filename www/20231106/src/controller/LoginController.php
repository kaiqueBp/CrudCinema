<?php
    namespace App\controller;

    class LoginController{
        public function login($email, $senha){
            return $email == 'usuario@test.com' && $senha == 'senha123';
        }
    }