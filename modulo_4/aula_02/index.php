<?php
    date_default_timezone_set("America/Sao_Paulo");

    $pdo = new PDO("mysql:host=localhost;dbname=modulo4","root","");

    if (isset($_POST['acao'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date("Y-m-d H:i:s");
        
        $sql = $pdo->prepare("INSERT INTO `clientes` VALUE (null, ?, ?, ?)");
        
        $sql->execute([$nome, $sobrenome, $momento_registro]);

        echo 'Cliente inserido com sucesso!';
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro no banco</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" required >
        <input type="text" name="sobrenome" required>
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>