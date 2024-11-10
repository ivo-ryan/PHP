<?php
    $pdo = new PDO("mysql:host=localhost;dbname=modulo4","root","");

    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id= ? ");

    if ($sql->execute([3])) {
        echo "Cliente deletetado com sucesso!";
    }
?>