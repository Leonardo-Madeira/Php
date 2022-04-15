<?php

    $clientes = ['cliente1', 'cliente2', 'cliente3', 'cliente4', 'cliente5'];

    print_r(array_map('strip_tags',$clientes));

?>