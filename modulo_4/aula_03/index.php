<?php
    $pdo = new PDO("mysql:host=localhost;dbname=modulo4","root", "");

    $id = 3;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Ryan', sobrenome='Pacheco' WHERE id=$id");

    if ($sql->execute()) {
        echo "Cliente atualizado com sucesso!";
    }
?>