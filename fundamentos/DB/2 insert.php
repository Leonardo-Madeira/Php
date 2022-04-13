<?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=aula01','root','');

    if (isset($_POST['acao'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $registro = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUE (null,?,?,?)");

        $sql->execute(array($nome,$email,$registro));
        echo 'Cliente inserido com sucesso!';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" required />
        <input type="text" name="email" required />
        <input type="submit" name="acao" value="Enviar" />
    </form>
</body>
</html>