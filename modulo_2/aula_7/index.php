<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <?php
        // if (isset($_GET['acao'])) {
        //     $nome = $_GET['nome'];
        //     $email = $_GET['email'];

        //     echo "$nome <br/>";
        //     echo $email;
        // }

        // if (isset($_POST['acao'])) {
        //     $nome = $_POST['nome'];
        //     $email = $_POST['email'];

        //     echo "$nome <br/>";
        //     echo $email;
        // }

        if (isset($_POST['acao'])) {
          echo ($_POST['numero1'] + $_POST['numero2']);
        }
    ?>

    <form method="post">
        <input type="text" name="numero1">
        <input type="text" name="numero2">
        <input type="submit" name="acao" value="Enviar">

    </form>

    <div>
        <h3 style="color: green; font-family:'Times New Roman', Times, serif">
            Não devie do caminho mantenha o foco por favor , não se esqueça da sua promessa!
        </h3>
    </div>
</body>
</html>