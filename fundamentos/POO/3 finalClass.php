<?php

    class Filha{ //So é possivel herdar uma class se não tiver FINAL em uma class
        public function ola(){
            echo 'Olá, mundo! <br>';
            $this->teste();
        }
        protected function teste(){
            echo 'Mensagem de teste! Protected!!! <br>';
        }
    }

    class Pai extends Filha{ //Extends herdou todas funções de Filha
        public function tchau(){
            echo 'Tchau, mundo! <br>';
            $this->ola();
        }
    }

    //$pai = new Pai;
    //$pai->tchau();
    //$filha = new Filha;
    //$filha->ola();

    $pai = new Pai;
    $pai->tchau();
    //Note que eu instanciei todas as funções para dentro de tchau
?>  