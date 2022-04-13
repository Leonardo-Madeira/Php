<?php
    //DELETE

    $pdo = new PDO('mysql:host=localhost;dbname=aula01','root','');

    $id = 11;

    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

    if($sql->execute(array($id))){
        echo 'Seus dados foram deletados com Sucesso!';
    }


?>