<?php
    echo 'Somando dois arrays e colocando o resultado em um terceiro array';
    echo '<hr/>';
    $array = [];
    $array2 = [];
    $array3 = [];
    for($i=0;$i<=9;$i++){
        $numero = rand(1,10);
        $numero2 = rand(11,20);
        array_push($array,$numero);
        array_push($array2,$numero2);
        $soma = $array[$i]+$array2[$i];
        array_push($array3,$soma);
    }
    echo '<br/>';
    print_r($array);
    echo '<br/>';
    print_r($array2);
    echo '<br/>';
    print_r($array3);
?>