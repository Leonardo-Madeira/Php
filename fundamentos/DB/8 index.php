<?php

    define('HOST','localhost');
    define('DB','aula03');
    define('USER','root');
    define('PASS','');

    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo 'Erro ao conectar';
    }

    //Essa é a melhor forma de se conectar ao banco de dados, pois essa é uma forma segura para que não aja um invasor querendo descobrir qual é a senha do db
    //Deixe de usar a forma como é mostrada na aula 1(conectando) e utilize dessa nova forma como mostra acima.

?>