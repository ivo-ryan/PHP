<?php
    $arr = ['Ivo', 'Pamella', 'Camille', 'Ryan'];

    foreach ($arr as $key => $value) {
        echo $key;
        echo $value;
        echo '<hr/>';
    }

    $total = count($arr);

    for ($i=0; $i < $total; $i++) { 
        echo $arr[$i];
        echo '<hr/><br/> ';
    }
?>