<?php
    //UPDATE e condições nas queries!

    $pdo = new PDO('mysql:host=localhost;dbname=aula01','root','');

    $id = 8;

    //AND -> funciona como 'E'
    //OR -> funciona como 'OU'

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Jhon Doe',email='jhondoe@hotmail.com' WHERE id=$id");

    if($sql->execute()){
        echo 'Seus dados foram atualizados com Sucesso!';
    }


?>