<?php

    class User{
        private $nome = 'Leonardo';
        private $sobrenome = 'Madeira';
        private $idade = 25;
        public $peso = 75;
        public function falar(){
            $this->comer();
            echo 'Olá, mundo!';
        }
        public function comer(){
            echo 'Comendo algo...';
        }
    }

    $user = new User;

    $user->falar();

?>