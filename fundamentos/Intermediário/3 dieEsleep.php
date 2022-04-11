<?php

    //Se o nome não for Madeira, a pagina vai ser finalizada no Die que retonar aquela msg
    $nome = 'Leonardo';
    if ($nome == 'Madeira') {
        echo 'Perfeito!';
    }else{
        die('O script foi finalizado aqui.');
    }

    //Dorme a função(codigo) por 3s como esta no sleep
    sleep(3);
    echo 'Hello, world!';



?>