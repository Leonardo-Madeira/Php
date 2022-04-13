<?php
    $pdo = new PDO('mysql:host=localhost;dbname=aula02','root','');

    $sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY id ASC");
    //"SELECT * FROM `clientes` GROUP BY `cargo`" Retorna apenas um nome por cargo(New: GROUP BY `cargo`)
    //"SELECT * FROM `clientes` GROUP BY `cargo` LIMIT 2" Retorna no maximo duas pessoas(New: LIMIT 2)
    //"SELECT * FROM `clientes` ORDER BY nome ASC" Retorna de forma alfabetica(New: ORDER BY nome ASC)
    //"SELECT * FROM `clientes` ORDER BY nome DESC" Retorna de forma alfabetica inversa(New: ORDER BY nome DESC)
    $sql->execute();

    $clientes = $sql->fetchAll();

    foreach ($clientes as $key => $value) {
        echo $value['nome'];
        echo ':'.$value['cargo'];
        echo '<br />';
    }

?>