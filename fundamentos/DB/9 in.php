<?php

    define('HOST','localhost');
    define('DB','testes');
    define('USER','root');
    define('PASS','');

    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo 'Erro ao conectar';
    }

    $sql = $pdo->prepare("SELECT * FROM clientes WHERE id IN (1,2,6)");
    // IN invoca exatamente o que voce quer indicando o numero do id por exemplo.
    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($info);
    echo "</pre>";


?>