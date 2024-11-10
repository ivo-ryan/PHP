<?php
    function cons ($nome){
        echo "<h1>Nome é : $nome</h1>";
    };

    cons('Pamella');
    date_default_timezone_set('America/Sao_paulo');

    $data = date("d/m/Y H:i:s", time()+(60*10));

    echo $data;
?>