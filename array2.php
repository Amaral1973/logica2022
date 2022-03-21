<?php
    echo 'Adicionando elemento no início do array';
    echo '<hr/>';
    $frutas = array('maçã','melão','uva');
    print_r($frutas);
    echo '<br/>';
    array_unshift($frutas,'mamão');
    print_r($frutas);
    echo '<hr/>';
    echo 'Adicionando elemento no final do array';
    echo '<hr/>';
    $frutas2 = array('uva','pera','abacate');
    print_r($frutas2);
    array_push($frutas2,'abacaxi');
    echo '<br/>';
    print_r($frutas2);
    echo '<hr/>';
    echo 'Remover elementos de um array';
    echo '<hr/>';
    $cores = array('azul','verde','roxo','amarelo');
    print_r($cores);
    echo '<br/>';
    echo 'Remover o 1º elemento<br/>';
    array_shift($cores);
    print_r($cores);
    echo '<br/>';
    echo 'Remover o último elemento<br/>';
    array_pop($cores);
    print_r($cores);
    echo '<hr/>';
    echo 'Ordenando array';
    echo '<hr/>';
    $carros = ['Palio','Onix','Ka','Corcel'];
    print_r($carros);
    echo '<br/>';
    echo 'Ordenando de forma crescente<br/>';
    sort($carros);
    print_r($carros);
    echo '<hr/>';
    echo 'Filtrando elementos de um array';
    echo '<hr/>';
    function filtro($value){
        return $value <> 5;
    }
    $numeros = [1,2,5,45,23,78,90,123,8];
    print_r($numeros);
    echo '<br/>';
    $filtro = array_filter($numeros, 'filtro');
    print_r($filtro);
    echo '<hr/>';
    echo 'Criando um array com números aleatórios';
    echo '<hr/>';
    $array = [];
    for($i=1;$i<=10;$i++){
        $numero = rand(1,10);
        echo $numero.'<br/>';
        array_push($array,$numero);
    }
    echo '<br/>';
    print_r($array);
?>