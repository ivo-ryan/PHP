<?php
    $pdo = new PDO("mysql:host=localhost;dbname=modulo4","root","");

    $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = 1");

    $sql->execute();

    $info = $sql->fetchAll();


    foreach ($info as $key => $value) {
       echo 'Titulo '.$value['titulo'].'<br/>';
       echo 'Conteudo '.$value['conteudo'].'<hr/>';
    }

?>