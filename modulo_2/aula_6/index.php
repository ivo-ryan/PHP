<?php
    echo '<h2 style="color: green">Não perca o foco por favor , não desvie do caminho que deus esta te guiando!</h2>';

    $array1 = [1,2,3,4,5,6];
    $array2 = [7,8,9,10,11,12];

    $result = array_merge($array1, $array2);

    print_r($result);

    $array3 = ["chave1"=> "1", "chave2"=> "2"];
    $array4 = ["chave1"=> "1", "chave2"=> "2"];

    print_r(array_intersect_key($array3,$array4));
?>