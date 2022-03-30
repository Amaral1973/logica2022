<?php
    echo 'Achando o valor do menor elemento de um array';
    echo '<hr/>';
    $array = [];
    for($i=0;$i<=4;$i++){
        $numero = rand(0,10);
        array_push($array,$numero);
    }
    echo '<br/>';
    print_r($array);
    echo '<br/>';
    $menor = min($array);
    echo 'O menor valor do array é: '.min($array).'<br/>';
    $posicao = array_search($menor,$array);
    echo 'A posição deste valor no array é: '.$posicao;
?>