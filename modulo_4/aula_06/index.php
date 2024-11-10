<?php
    $pdo = new PDO("mysql:host=localhost;dbname=modulo_04","root","");

    /*
    $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY id ASC LIMIT 2");
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'];
        echo '<hr/>';
    }
    */


    $sql = $pdo->prepare("SELECT * FROM `clientes` RIGHT JOIN cargos ON clientes.cargo = cargos.id");
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'];
        echo ' : ';
        echo $value['nome_cargo'];
        echo '<hr/>';
    }
?>