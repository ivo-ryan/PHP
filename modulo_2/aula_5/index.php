<?php
    $nome = 'Ivo Ryan';

    switch ($nome) {
        case 'Ivo Ryan':
            echo 'Não à desaponte, você deixou ela esperando , por todo esse tempo e nem falou nada com ela cria vergonha na sua cara meu fi , Pamella te ama e você à deixou esperando assim!';
            break;
        
        default:
            echo 'Está errado!';
            break;
    }

    for ($i=0; $i <10 ; $i++) { 
       echo "<br/>$i";
       echo '<hr/>';
       if ($i === 5) {
        return ;
       }
    }
?>